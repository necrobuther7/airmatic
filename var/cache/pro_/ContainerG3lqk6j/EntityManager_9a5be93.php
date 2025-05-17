<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderff477 = null;
    private $initializer7b4e2 = null;
    private static $publicProperties5433a = [
        
    ];
    public function getConnection()
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'getConnection', array(), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'getMetadataFactory', array(), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'getExpressionBuilder', array(), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'beginTransaction', array(), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'getCache', array(), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->getCache();
    }
    public function transactional($func)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'transactional', array('func' => $func), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'commit', array(), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->commit();
    }
    public function rollback()
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'rollback', array(), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'getClassMetadata', array('className' => $className), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'createQuery', array('dql' => $dql), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'createNamedQuery', array('name' => $name), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'createQueryBuilder', array(), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'flush', array('entity' => $entity), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'clear', array('entityName' => $entityName), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->clear($entityName);
    }
    public function close()
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'close', array(), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->close();
    }
    public function persist($entity)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'persist', array('entity' => $entity), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'remove', array('entity' => $entity), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'refresh', array('entity' => $entity), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'detach', array('entity' => $entity), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'merge', array('entity' => $entity), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'contains', array('entity' => $entity), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'getEventManager', array(), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'getConfiguration', array(), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'isOpen', array(), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'getUnitOfWork', array(), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'getProxyFactory', array(), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'initializeObject', array('obj' => $obj), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'getFilters', array(), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'isFiltersStateClean', array(), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'hasFilters', array(), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return $this->valueHolderff477->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer7b4e2 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderff477) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderff477 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderff477->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, '__get', ['name' => $name], $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        if (isset(self::$publicProperties5433a[$name])) {
            return $this->valueHolderff477->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderff477;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderff477;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderff477;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderff477;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, '__isset', array('name' => $name), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderff477;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderff477;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, '__unset', array('name' => $name), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderff477;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderff477;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, '__clone', array(), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        $this->valueHolderff477 = clone $this->valueHolderff477;
    }
    public function __sleep()
    {
        $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, '__sleep', array(), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
        return array('valueHolderff477');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7b4e2 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7b4e2;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer7b4e2 && ($this->initializer7b4e2->__invoke($valueHolderff477, $this, 'initializeProxy', array(), $this->initializer7b4e2) || 1) && $this->valueHolderff477 = $valueHolderff477;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderff477;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderff477;
    }
}
