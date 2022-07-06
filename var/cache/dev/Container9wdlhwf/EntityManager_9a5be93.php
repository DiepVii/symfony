<?php

namespace Container9wdlhwf;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7e961 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd4505 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2796f = [
        
    ];

    public function getConnection()
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'getConnection', array(), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'getMetadataFactory', array(), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'getExpressionBuilder', array(), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'beginTransaction', array(), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'getCache', array(), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'transactional', array('func' => $func), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'commit', array(), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->commit();
    }

    public function rollback()
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'rollback', array(), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'getClassMetadata', array('className' => $className), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'createQuery', array('dql' => $dql), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'createNamedQuery', array('name' => $name), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'createQueryBuilder', array(), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'flush', array('entity' => $entity), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'clear', array('entityName' => $entityName), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->clear($entityName);
    }

    public function close()
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'close', array(), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->close();
    }

    public function persist($entity)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'persist', array('entity' => $entity), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'remove', array('entity' => $entity), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'refresh', array('entity' => $entity), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'detach', array('entity' => $entity), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'merge', array('entity' => $entity), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'contains', array('entity' => $entity), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'getEventManager', array(), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'getConfiguration', array(), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'isOpen', array(), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'getUnitOfWork', array(), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'getProxyFactory', array(), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'initializeObject', array('obj' => $obj), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'getFilters', array(), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'isFiltersStateClean', array(), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'hasFilters', array(), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return $this->valueHolder7e961->hasFilters();
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

        $instance->initializerd4505 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7e961) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7e961 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7e961->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, '__get', ['name' => $name], $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        if (isset(self::$publicProperties2796f[$name])) {
            return $this->valueHolder7e961->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e961;

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

        $targetObject = $this->valueHolder7e961;
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
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e961;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7e961;
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
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, '__isset', array('name' => $name), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e961;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7e961;
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
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, '__unset', array('name' => $name), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e961;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7e961;
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
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, '__clone', array(), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        $this->valueHolder7e961 = clone $this->valueHolder7e961;
    }

    public function __sleep()
    {
        $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, '__sleep', array(), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;

        return array('valueHolder7e961');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd4505 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd4505;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd4505 && ($this->initializerd4505->__invoke($valueHolder7e961, $this, 'initializeProxy', array(), $this->initializerd4505) || 1) && $this->valueHolder7e961 = $valueHolder7e961;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7e961;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7e961;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
