<?php 

// Model Pokemon 

class PokemonModel 
{
    private $id; 
    private $nom; 
    private $pv; 
    private $attack; 
    private $defense; 
    private $attack_spe; 
    private $defense_spe; 
    private $speed; 
    private $numero; 

    public function findsPokemon()
    {
       $sql = 'SELECT * FROM `pokemon`'; 

       $pdo = Database::getPDO(); 

       $statement = $pdo->query($sql);

       $pokemons = $statement->fetchAll(PDO::FETCH_CLASS, 'PokemonModel');

       return $pokemons; 
    }

    public function findPokemon($id)
    {   /*
        $sql = 'SELECT * FROM `pokemon` WHERE `numero` = '$id; 

        $pdo = Database::getPDO(); 
 
        $statement = $pdo->query($sql); 
 
        $pokemon = $statement->fetchObject('PokemonModel');
 
        return $pokemon;
        */
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    

    /**
     * Get the value of pv
     */ 
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Set the value of pv
     *
     * @return  self
     */ 
    public function setPv($pv)
    {
        $this->pv = $pv;

        return $this;
    }

    /**
     * Get the value of attack
     */ 
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * Set the value of attack
     *
     * @return  self
     */ 
    public function setAttack($attack)
    {
        $this->attack = $attack;

        return $this;
    }

    /**
     * Get the value of defense
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Set the value of defense
     *
     * @return  self
     */ 
    public function setDefense($defense)
    {
        $this->defense = $defense;

        return $this;
    }

    /**
     * Get the value of spe_attack
     */ 
    public function getSpe_attack()
    {
        return $this->spe_attack;
    }

    /**
     * Set the value of spe_attack
     *
     * @return  self
     */ 
    public function setSpe_attack($spe_attack)
    {
        $this->spe_attack = $spe_attack;

        return $this;
    }

    /**
     * Get the value of attack_spe
     */ 
    public function getAttack_spe()
    {
        return $this->attack_spe;
    }

    /**
     * Set the value of attack_spe
     *
     * @return  self
     */ 
    public function setAttack_spe($attack_spe)
    {
        $this->attack_spe = $attack_spe;

        return $this;
    }

    /**
     * Get the value of defense_spe
     */ 
    public function getDefense_spe()
    {
        return $this->defense_spe;
    }

    /**
     * Set the value of defense_spe
     *
     * @return  self
     */ 
    public function setDefense_spe($defense_spe)
    {
        $this->defense_spe = $defense_spe;

        return $this;
    }

    /**
     * Get the value of speed
     */ 
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set the value of speed
     *
     * @return  self
     */ 
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}