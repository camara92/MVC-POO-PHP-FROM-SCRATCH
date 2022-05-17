<?php
    class Game {
        private  $id; 
        private  $title; 
        private $nbplayers; 
     
        
        public function __construct($id, $title, $nbplayers)
        {
            $this->id= $id;
            $this->title= $title;
            $this->nbplayers= $nbplayers; 
            
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
         * Get the value of title
         */ 
        public function getTitle()
        {
                return $this->title;
        }

        /**
         * Set the value of title
         *
         * @return  self
         */ 
        public function setTitle($title)
        {
                $this->title = $title;

                return $this;
        }

        

        /**
         * Get the value of nbplayers
         */ 
        public function getNbplayers()
        {
                return $this->nbplayers;
        }

        /**
         * Set the value of nbplayers
         *
         * @return  self
         */ 
        public function setNbplayers($nbplayers)
        {
                $this->nbplayers = $nbplayers;

                return $this;
        }
    }
