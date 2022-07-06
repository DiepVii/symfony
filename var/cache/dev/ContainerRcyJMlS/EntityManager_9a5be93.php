<?php

namespace ContainerRcyJMlS;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder388ac = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2626b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties871b7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'getConnection', array(), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'getMetadataFactory', array(), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'getExpressionBuilder', array(), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'beginTransaction', array(), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'getCache', array(), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'transactional', array('func' => $func), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'commit', array(), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->commit();
    }

    public function rollback()
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'rollback', array(), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'getClassMetadata', array('className' => $className), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'createQuery', array('dql' => $dql), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'createNamedQuery', array('name' => $name), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'createQueryBuilder', array(), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'flush', array('entity' => $entity), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'clear', array('entityName' => $entityName), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->clear($entityName);
    }

    public function close()
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'close', array(), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->close();
    }

    public function persist($entity)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'persist', array('entity' => $entity), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'remove', array('entity' => $entity), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'refresh', array('entity' => $entity), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'detach', array('entity' => $entity), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'merge', array('entity' => $entity), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'contains', array('entity' => $entity), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'getEventManager', array(), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'getConfiguration', array(), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'isOpen', array(), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'getUnitOfWork', array(), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'getProxyFactory', array(), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'initializeObject', array('obj' => $obj), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'getFilters', array(), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'isFiltersStateClean', array(), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'hasFilters', array(), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return $this->valueHolder388ac->hasFilters();
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

        $instance->initializer2626b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder388ac) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder388ac = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder388ac->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, '__get', ['name' => $name], $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        if (isset(self::$publicProperties871b7[$name])) {
            return $this->valueHolder388ac->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder388ac;

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

        $targetObject = $this->valueHolder388ac;
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
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder388ac;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder388ac;
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
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, '__isset', array('name' => $name), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder388ac;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder388ac;
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
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, '__unset', array('name' => $name), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder388ac;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder388ac;
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
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, '__clone', array(), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        $this->valueHolder388ac = clone $this->valueHolder388ac;
    }

    public function __sleep()
    {
        $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, '__sleep', array(), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;

        return array('valueHolder388ac');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2626b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2626b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2626b && ($this->initializer2626b->__invoke($valueHolder388ac, $this, 'initializeProxy', array(), $this->initializer2626b) || 1) && $this->valueHolder388ac = $valueHolder388ac;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder388ac;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder388ac;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
