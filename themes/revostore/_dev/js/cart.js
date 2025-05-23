/***
 * 2007-2024 ETS-Soft
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 wesite only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses. 
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 * 
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please contact us for extra customization service at an affordable price
 *
 *  @author ETS-Soft <etssoft.jsc@gmail.com>
 *  @copyright  2007-2024 ETS-Soft
 *  @license    Valid for 1 website (or project) for each purchase of license
 *  International Registered Trademark & Property of ETS-Soft
 */
import $ from 'jquery';
import prestashop from 'prestashop';

prestashop.cart = prestashop.cart || {};

prestashop.cart.active_inputs = null;

var spinnerSelector = 'input[name="product-quantity-spin"]';

/***
 * Attach Bootstrap TouchSpin event handlers
 */
function createSpin()
{
  $.each($(spinnerSelector), function (index, spinner) {
     $(spinner).TouchSpin({
      verticalbuttons: true,
      verticalupclass: 'material-icons touchspin-up',
      verticaldownclass: 'material-icons touchspin-down',
      buttondown_class: 'btn btn-touchspin js-touchspin js-increase-product-quantity',
      buttonup_class: 'btn btn-touchspin js-touchspin js-decrease-product-quantity',
      min: parseInt($(spinner).attr('min'), 10),
      max: 1000000
    });
  });
}


$(document).ready(() => {
  let productLineInCartSelector = '.js-cart-line-product-quantity';
  let promises = [];

  prestashop.on('updateCart', () => {
    $('.quickview').modal('hide');
  });

  createSpin();

  let $body = $('body');

  function isTouchSpin(namespace) {
    return namespace === 'on.startupspin' || namespace === 'on.startdownspin';
  }

  function shouldIncreaseProductQuantity(namespace) {
    return namespace === 'on.startupspin';
  }

  function findCartLineProductQuantityInput($target) {
    var $input = $target.parents('.bootstrap-touchspin').find(productLineInCartSelector);

    if ($input.is(':focus')) {
      return null;
    } else {
      return $input;
    }
  }

  function camelize(subject) {
    let actionTypeParts = subject.split('-');
    let i;
    let part;
    let camelizedSubject = '';

    for (i = 0; i < actionTypeParts.length; i++) {
      part = actionTypeParts[i];

      if (0 !== i) {
        part = part.substring(0, 1).toUpperCase() + part.substring(1);
      }

      camelizedSubject = camelizedSubject + part;
    }

    return camelizedSubject;
  }

  function parseCartAction($target, namespace) {
    if (!isTouchSpin(namespace)) {
      return {
        url: $target.attr('href'),
        type: camelize($target.data('link-action'))
      }
    }

    let $input = findCartLineProductQuantityInput($target);
    if (!$input) {
      return;
    }

    let cartAction = {};
    if (shouldIncreaseProductQuantity(namespace)) {
      cartAction = {
        url: $input.data('up-url'),
        type: 'increaseProductQuantity'
      };
    } else {
      cartAction = {
        url: $input.data('down-url'),
        type: 'decreaseProductQuantity'
      }
    }

    return cartAction;
  }

  let abortPreviousRequests = () => {
    var promise;
    while (promises.length > 0) {
      promise = promises.pop();
      promise.abort();
    }
  };

  var getTouchSpinInput = ($button) => {
    return $($button.parents('.bootstrap-touchspin').find('input'));
  };

  var handleCartAction = (event) => {
    event.preventDefault();

    let $target = $(event.currentTarget);

    let cartAction = parseCartAction($target, event.namespace);
    let requestData = {
      ajax: '1',
      action: 'update'
    };

    if (typeof cartAction === 'undefined') {
      return;
    }

    abortPreviousRequests();
    $.ajax({
      url: cartAction.url,
      method: 'POST',
      data: requestData,
      dataType: 'json',
      beforeSend: function (jqXHR) {
        promises.push(jqXHR);
      }
    }).then(function (resp) {
      var $quantityInput = getTouchSpinInput($target);
      $quantityInput.val(resp.quantity);

      // Refresh cart preview
      prestashop.emit('updateCart', {
        reason: $target.dataset
      });
    }).fail((resp) => {
      prestashop.emit('handleError', {
        eventType: 'updateProductInCart',
        resp: resp,
        cartAction: cartAction.type
      });
    });
  };

  $body.on(
    'click',
    '[data-link-action="delete-from-cart"], [data-link-action="remove-voucher"]',
    handleCartAction
  );

  $(spinnerSelector).on('touchspin.on.startdownspin', handleCartAction);
  $(spinnerSelector).on('touchspin.on.startupspin', handleCartAction);

  function sendUpdateQuantityInCartRequest(updateQuantityInCartUrl, requestData, $target) {
    abortPreviousRequests();

    return $.ajax({
      url: updateQuantityInCartUrl,
      method: 'POST',
      data: requestData,
      dataType: 'json',
      beforeSend: function (jqXHR) {
        promises.push(jqXHR);
      }
    }).then(function (resp) {
      $target.val(resp.quantity);

      var dataset;
      if ($target) {
        dataset = $target.dataset;
      } else {
        dataset = null;
      }

      // Refresh cart preview
      prestashop.emit('updateCart', {
        reason: dataset
      });
    }).fail((resp) => {
      prestashop.emit('handleError', {eventType: 'updateProductQuantityInCart', resp: resp})
    });
  }

  function getRequestData(quantity) {
    return {
      ajax: '1',
      qty: Math.abs(quantity),
      action: 'update',
      op: getQuantityChangeType(quantity)
    }
  }

  function getQuantityChangeType($quantity) {
    return ($quantity > 0) ? 'up' : 'down';
  }

  function updateProductQuantityInCart(event)
  {
    let $target = $(event.currentTarget);
    let updateQuantityInCartUrl = $target.data('update-url');
    let baseValue = $target.attr('value');

    // There should be a valid product quantity in cart
    let targetValue = $target.val();
    if (targetValue != parseInt(targetValue) || targetValue < 0 || isNaN(targetValue)) {
      $target.val(baseValue);

      return;
    }

    // There should be a new product quantity in cart
    let qty = targetValue - baseValue;
    if (qty == 0) {
      return;
    }

    var requestData = getRequestData(qty);

    sendUpdateQuantityInCartRequest(updateQuantityInCartUrl, requestData, $target);
  }

  $body.on(
    'focusout',
    productLineInCartSelector,
    (event) => {
      updateProductQuantityInCart(event);
    }
  );

  $body.on(
    'keyup',
    productLineInCartSelector,
    (event) => {
      if (event.keyCode == 13) {
        updateProductQuantityInCart(event);
      }
    }
  );

  $body.on(
    'click',
    '.js-discount .code',
    (event) => {
      event.stopPropagation();

      var $code = $(event.currentTarget);
      var $discountInput = $('[name=discount_name]');

      $discountInput.val($code.text());

      return false;
    }
  )
});


