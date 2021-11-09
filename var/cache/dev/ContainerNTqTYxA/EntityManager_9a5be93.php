<?php

namespace ContainerNTqTYxA;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderea365 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer744be = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb850f = [
        
    ];

    public function getConnection()
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'getConnection', array(), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'getMetadataFactory', array(), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'getExpressionBuilder', array(), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'beginTransaction', array(), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'getCache', array(), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->getCache();
    }

    public function transactional($func)
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'transactional', array('func' => $func), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->transactional($func);
    }

    public function commit()
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'commit', array(), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->commit();
    }

    public function rollback()
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'rollback', array(), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'getClassMetadata', array('className' => $className), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'createQuery', array('dql' => $dql), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'createNamedQuery', array('name' => $name), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'createQueryBuilder', array(), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'flush', array('entity' => $entity), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'clear', array('entityName' => $entityName), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->clear($entityName);
    }

    public function close()
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'close', array(), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->close();
    }

    public function persist($entity)
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'persist', array('entity' => $entity), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'remove', array('entity' => $entity), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'refresh', array('entity' => $entity), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'detach', array('entity' => $entity), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'merge', array('entity' => $entity), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'getRepository', array('entityName' => $entityName), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'contains', array('entity' => $entity), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'getEventManager', array(), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'getConfiguration', array(), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'isOpen', array(), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'getUnitOfWork', array(), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'getProxyFactory', array(), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'initializeObject', array('obj' => $obj), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'getFilters', array(), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'isFiltersStateClean', array(), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'hasFilters', array(), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return $this->valueHolderea365->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer744be = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderea365) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderea365 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderea365->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, '__get', ['name' => $name], $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        if (isset(self::$publicPropertiesb850f[$name])) {
            return $this->valueHolderea365->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderea365;

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

        $targetObject = $this->valueHolderea365;
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
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderea365;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderea365;
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
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, '__isset', array('name' => $name), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderea365;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderea365;
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
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, '__unset', array('name' => $name), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderea365;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderea365;
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
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, '__clone', array(), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        $this->valueHolderea365 = clone $this->valueHolderea365;
    }

    public function __sleep()
    {
        $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, '__sleep', array(), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;

        return array('valueHolderea365');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer744be = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer744be;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer744be && ($this->initializer744be->__invoke($valueHolderea365, $this, 'initializeProxy', array(), $this->initializer744be) || 1) && $this->valueHolderea365 = $valueHolderea365;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderea365;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderea365;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
