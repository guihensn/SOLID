<?php
    interface Equipament{
        public function action();
    }

    class Sword implements Equipament{
        public function action()
        {
            echo "Use the sword to atack.";
        }
    }

    class Shield implements Equipament{
        public function action()
        {
            echo "Use the shield to defend.";
        }
    }   

    class Watch implements Equipament{
        public function action()
        {
            echo "Use the watch to see the time.";
        }
    }

    class Pencil implements Equipament{
        public function action()
        {
            echo "Use the pencil to write something.";
        }
    }   

    class Character{
        public function useEquipament(Equipament $equipament){
           $equipament->action();
        }
    }
?>