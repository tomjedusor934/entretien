<?php

namespace Container2XgqjcL;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3d613 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer564aa = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3cd68 = [
        
    ];

    public function getConnection()
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'getConnection', array(), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'getMetadataFactory', array(), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'getExpressionBuilder', array(), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'beginTransaction', array(), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'getCache', array(), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->getCache();
    }

    public function transactional($func)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'transactional', array('func' => $func), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'wrapInTransaction', array('func' => $func), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'commit', array(), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->commit();
    }

    public function rollback()
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'rollback', array(), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'getClassMetadata', array('className' => $className), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'createQuery', array('dql' => $dql), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'createNamedQuery', array('name' => $name), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'createQueryBuilder', array(), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'flush', array('entity' => $entity), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'clear', array('entityName' => $entityName), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->clear($entityName);
    }

    public function close()
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'close', array(), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->close();
    }

    public function persist($entity)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'persist', array('entity' => $entity), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'remove', array('entity' => $entity), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'refresh', array('entity' => $entity), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'detach', array('entity' => $entity), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'merge', array('entity' => $entity), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'getRepository', array('entityName' => $entityName), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'contains', array('entity' => $entity), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'getEventManager', array(), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'getConfiguration', array(), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'isOpen', array(), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'getUnitOfWork', array(), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'getProxyFactory', array(), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'initializeObject', array('obj' => $obj), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'getFilters', array(), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'isFiltersStateClean', array(), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'hasFilters', array(), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return $this->valueHolder3d613->hasFilters();
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

        $instance->initializer564aa = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3d613) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3d613 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3d613->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, '__get', ['name' => $name], $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        if (isset(self::$publicProperties3cd68[$name])) {
            return $this->valueHolder3d613->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d613;

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

        $targetObject = $this->valueHolder3d613;
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
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d613;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3d613;
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
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, '__isset', array('name' => $name), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d613;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3d613;
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
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, '__unset', array('name' => $name), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d613;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3d613;
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
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, '__clone', array(), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        $this->valueHolder3d613 = clone $this->valueHolder3d613;
    }

    public function __sleep()
    {
        $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, '__sleep', array(), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;

        return array('valueHolder3d613');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer564aa = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer564aa;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer564aa && ($this->initializer564aa->__invoke($valueHolder3d613, $this, 'initializeProxy', array(), $this->initializer564aa) || 1) && $this->valueHolder3d613 = $valueHolder3d613;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3d613;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3d613;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
