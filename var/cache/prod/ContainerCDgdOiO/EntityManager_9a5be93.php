<?php

namespace ContainerCDgdOiO;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder23f81 = null;
    private $initializera2164 = null;
    private static $publicProperties979fa = [
        
    ];
    public function getConnection()
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'getConnection', array(), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'getMetadataFactory', array(), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'getExpressionBuilder', array(), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'beginTransaction', array(), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->beginTransaction();
    }
    public function getCache()
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'getCache', array(), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->getCache();
    }
    public function transactional($func)
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'transactional', array('func' => $func), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->transactional($func);
    }
    public function commit()
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'commit', array(), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->commit();
    }
    public function rollback()
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'rollback', array(), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'getClassMetadata', array('className' => $className), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'createQuery', array('dql' => $dql), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'createNamedQuery', array('name' => $name), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'createQueryBuilder', array(), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'flush', array('entity' => $entity), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'clear', array('entityName' => $entityName), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->clear($entityName);
    }
    public function close()
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'close', array(), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->close();
    }
    public function persist($entity)
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'persist', array('entity' => $entity), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'remove', array('entity' => $entity), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'refresh', array('entity' => $entity), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'detach', array('entity' => $entity), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'merge', array('entity' => $entity), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'getRepository', array('entityName' => $entityName), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'contains', array('entity' => $entity), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'getEventManager', array(), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'getConfiguration', array(), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'isOpen', array(), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'getUnitOfWork', array(), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'getProxyFactory', array(), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'initializeObject', array('obj' => $obj), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'getFilters', array(), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'isFiltersStateClean', array(), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'hasFilters', array(), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return $this->valueHolder23f81->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializera2164 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder23f81) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder23f81 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder23f81->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, '__get', ['name' => $name], $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        if (isset(self::$publicProperties979fa[$name])) {
            return $this->valueHolder23f81->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23f81;
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
        $targetObject = $this->valueHolder23f81;
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
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23f81;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder23f81;
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
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, '__isset', array('name' => $name), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23f81;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder23f81;
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
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, '__unset', array('name' => $name), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23f81;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder23f81;
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
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, '__clone', array(), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        $this->valueHolder23f81 = clone $this->valueHolder23f81;
    }
    public function __sleep()
    {
        $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, '__sleep', array(), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
        return array('valueHolder23f81');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera2164 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera2164;
    }
    public function initializeProxy() : bool
    {
        return $this->initializera2164 && ($this->initializera2164->__invoke($valueHolder23f81, $this, 'initializeProxy', array(), $this->initializera2164) || 1) && $this->valueHolder23f81 = $valueHolder23f81;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder23f81;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder23f81;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
