<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Users extends \App\Entity\Users implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'lastName', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'sexe', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'naissanceAt', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'pays', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'niveau', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'enseigners', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'profession', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'participations'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'lastName', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'sexe', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'naissanceAt', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'pays', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'niveau', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'enseigners', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'profession', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'participations'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Users $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName(string $firstName): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName(string $lastName): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getSexe(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSexe', []);

        return parent::getSexe();
    }

    /**
     * {@inheritDoc}
     */
    public function setSexe(string $sexe): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSexe', [$sexe]);

        return parent::setSexe($sexe);
    }

    /**
     * {@inheritDoc}
     */
    public function getNaissanceAt(): ?\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNaissanceAt', []);

        return parent::getNaissanceAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setNaissanceAt(\DateTime $naissanceAt): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNaissanceAt', [$naissanceAt]);

        return parent::setNaissanceAt($naissanceAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getPays(): ?\App\Entity\Pays
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPays', []);

        return parent::getPays();
    }

    /**
     * {@inheritDoc}
     */
    public function setPays(?\App\Entity\Pays $pays): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPays', [$pays]);

        return parent::setPays($pays);
    }

    /**
     * {@inheritDoc}
     */
    public function getNiveau(): ?\App\Entity\NiveauEnseignement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNiveau', []);

        return parent::getNiveau();
    }

    /**
     * {@inheritDoc}
     */
    public function setNiveau(?\App\Entity\NiveauEnseignement $niveau): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNiveau', [$niveau]);

        return parent::setNiveau($niveau);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnseigners(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnseigners', []);

        return parent::getEnseigners();
    }

    /**
     * {@inheritDoc}
     */
    public function addEnseigner(\App\Entity\Enseigner $enseigner): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEnseigner', [$enseigner]);

        return parent::addEnseigner($enseigner);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEnseigner(\App\Entity\Enseigner $enseigner): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEnseigner', [$enseigner]);

        return parent::removeEnseigner($enseigner);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getProfession(): ?\App\Entity\Profession
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfession', []);

        return parent::getProfession();
    }

    /**
     * {@inheritDoc}
     */
    public function setProfession(?\App\Entity\Profession $profession): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfession', [$profession]);

        return parent::setProfession($profession);
    }

    /**
     * {@inheritDoc}
     */
    public function getParticipations(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParticipations', []);

        return parent::getParticipations();
    }

    /**
     * {@inheritDoc}
     */
    public function addParticipation(\App\Entity\Participation $participation): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addParticipation', [$participation]);

        return parent::addParticipation($participation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeParticipation(\App\Entity\Participation $participation): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeParticipation', [$participation]);

        return parent::removeParticipation($participation);
    }

}
