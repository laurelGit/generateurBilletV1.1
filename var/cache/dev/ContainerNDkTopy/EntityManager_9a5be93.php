<?php

namespace ContainerNDkTopy;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5fa73 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerba9e0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc0eff = [
        
    ];

    public function getConnection()
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'getConnection', array(), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'getMetadataFactory', array(), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'getExpressionBuilder', array(), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'beginTransaction', array(), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'getCache', array(), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->getCache();
    }

    public function transactional($func)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'transactional', array('func' => $func), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'wrapInTransaction', array('func' => $func), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'commit', array(), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->commit();
    }

    public function rollback()
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'rollback', array(), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'getClassMetadata', array('className' => $className), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'createQuery', array('dql' => $dql), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'createNamedQuery', array('name' => $name), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'createQueryBuilder', array(), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'flush', array('entity' => $entity), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'clear', array('entityName' => $entityName), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->clear($entityName);
    }

    public function close()
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'close', array(), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->close();
    }

    public function persist($entity)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'persist', array('entity' => $entity), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'remove', array('entity' => $entity), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'refresh', array('entity' => $entity), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'detach', array('entity' => $entity), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'merge', array('entity' => $entity), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'getRepository', array('entityName' => $entityName), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'contains', array('entity' => $entity), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'getEventManager', array(), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'getConfiguration', array(), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'isOpen', array(), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'getUnitOfWork', array(), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'getProxyFactory', array(), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'initializeObject', array('obj' => $obj), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'getFilters', array(), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'isFiltersStateClean', array(), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'hasFilters', array(), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return $this->valueHolder5fa73->hasFilters();
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

        $instance->initializerba9e0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5fa73) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5fa73 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5fa73->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, '__get', ['name' => $name], $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        if (isset(self::$publicPropertiesc0eff[$name])) {
            return $this->valueHolder5fa73->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5fa73;

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

        $targetObject = $this->valueHolder5fa73;
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
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5fa73;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5fa73;
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
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, '__isset', array('name' => $name), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5fa73;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5fa73;
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
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, '__unset', array('name' => $name), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5fa73;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5fa73;
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
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, '__clone', array(), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        $this->valueHolder5fa73 = clone $this->valueHolder5fa73;
    }

    public function __sleep()
    {
        $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, '__sleep', array(), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;

        return array('valueHolder5fa73');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerba9e0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerba9e0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerba9e0 && ($this->initializerba9e0->__invoke($valueHolder5fa73, $this, 'initializeProxy', array(), $this->initializerba9e0) || 1) && $this->valueHolder5fa73 = $valueHolder5fa73;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5fa73;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5fa73;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
