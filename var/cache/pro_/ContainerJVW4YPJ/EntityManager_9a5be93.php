<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder77f97 = null;
    private $initializer9d3fc = null;
    private static $publicProperties4a52e = [
        
    ];
    public function getConnection()
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'getConnection', array(), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'getMetadataFactory', array(), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'getExpressionBuilder', array(), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'beginTransaction', array(), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'getCache', array(), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->getCache();
    }
    public function transactional($func)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'transactional', array('func' => $func), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'commit', array(), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->commit();
    }
    public function rollback()
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'rollback', array(), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'getClassMetadata', array('className' => $className), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'createQuery', array('dql' => $dql), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'createNamedQuery', array('name' => $name), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'createQueryBuilder', array(), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'flush', array('entity' => $entity), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'clear', array('entityName' => $entityName), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->clear($entityName);
    }
    public function close()
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'close', array(), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->close();
    }
    public function persist($entity)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'persist', array('entity' => $entity), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'remove', array('entity' => $entity), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'refresh', array('entity' => $entity), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'detach', array('entity' => $entity), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'merge', array('entity' => $entity), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'contains', array('entity' => $entity), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'getEventManager', array(), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'getConfiguration', array(), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'isOpen', array(), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'getUnitOfWork', array(), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'getProxyFactory', array(), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'initializeObject', array('obj' => $obj), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'getFilters', array(), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'isFiltersStateClean', array(), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'hasFilters', array(), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return $this->valueHolder77f97->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer9d3fc = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder77f97) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder77f97 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder77f97->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, '__get', ['name' => $name], $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        if (isset(self::$publicProperties4a52e[$name])) {
            return $this->valueHolder77f97->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77f97;
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
        $targetObject = $this->valueHolder77f97;
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
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77f97;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder77f97;
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
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, '__isset', array('name' => $name), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77f97;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder77f97;
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
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, '__unset', array('name' => $name), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77f97;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder77f97;
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
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, '__clone', array(), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        $this->valueHolder77f97 = clone $this->valueHolder77f97;
    }
    public function __sleep()
    {
        $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, '__sleep', array(), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
        return array('valueHolder77f97');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9d3fc = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9d3fc;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer9d3fc && ($this->initializer9d3fc->__invoke($valueHolder77f97, $this, 'initializeProxy', array(), $this->initializer9d3fc) || 1) && $this->valueHolder77f97 = $valueHolder77f97;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder77f97;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder77f97;
    }
}
