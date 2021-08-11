<?php
    class TypeController extends MainController
    {
        //Fonction qui va appelé la vue type
        public function type()
        {
            //On instancie un nouveau TypeModel
            $colors = new TypeModel();

            $types = $colors->findsColor();

            //On passe les couleurs(types) à la vue
            $this->show('type', [
                'colors' => $types
            ]);


        }

    }

    

?>