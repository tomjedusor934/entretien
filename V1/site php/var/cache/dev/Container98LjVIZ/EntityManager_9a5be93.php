<?php

namespace Container98LjVIZ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder79147 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer93efe = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties248cc = [
        
    ];

    public function getConnection()
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'getConnection', array(), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'getMetadataFactory', array(), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'getExpressionBuilder', array(), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'beginTransaction', array(), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'getCache', array(), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->getCache();
    }

    public function transactional($func)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'transactional', array('func' => $func), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'wrapInTransaction', array('func' => $func), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'commit', array(), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->commit();
    }

    public function rollback()
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'rollback', array(), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'getClassMetadata', array('className' => $className), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'createQuery', array('dql' => $dql), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'createNamedQuery', array('name' => $name), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'createQueryBuilder', array(), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'flush', array('entity' => $entity), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'clear', array('entityName' => $entityName), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->clear($entityName);
    }

    public function close()
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'close', array(), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->close();
    }

    public function persist($entity)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'persist', array('entity' => $entity), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'remove', array('entity' => $entity), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'refresh', array('entity' => $entity), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'detach', array('entity' => $entity), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'merge', array('entity' => $entity), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'getRepository', array('entityName' => $entityName), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'contains', array('entity' => $entity), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'getEventManager', array(), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'getConfiguration', array(), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'isOpen', array(), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'getUnitOfWork', array(), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'getProxyFactory', array(), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'initializeObject', array('obj' => $obj), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'getFilters', array(), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'isFiltersStateClean', array(), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'hasFilters', array(), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return $this->valueHolder79147->hasFilters();
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

        $instance->initializer93efe = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder79147) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder79147 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder79147->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, '__get', ['name' => $name], $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        if (isset(self::$publicProperties248cc[$name])) {
            return $this->valueHolder79147->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79147;

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

        $targetObject = $this->valueHolder79147;
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
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79147;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder79147;
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
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, '__isset', array('name' => $name), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79147;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder79147;
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
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, '__unset', array('name' => $name), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79147;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder79147;
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
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, '__clone', array(), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        $this->valueHolder79147 = clone $this->valueHolder79147;
    }

    public function __sleep()
    {
        $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, '__sleep', array(), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;

        return array('valueHolder79147');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer93efe = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer93efe;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer93efe && ($this->initializer93efe->__invoke($valueHolder79147, $this, 'initializeProxy', array(), $this->initializer93efe) || 1) && $this->valueHolder79147 = $valueHolder79147;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder79147;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder79147;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
