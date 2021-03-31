<?php

class Vue {

    private array $file;
    private string $content;
    private string $title;

    public function __construct($action)
    {
        $this->file = 'Vue/vue'.$action. '.php';
    }

    public function generate($data) {
        $content = $this->generateFile($this->file, $data);
        $vue = $this->generateFile('Vue/template.php', array('title'=>$this->title, 'contenu'=>$this->content));

        echo $vue;
    }

    private function generateFile($file, $data){
        if(file_exists($file)){
            extract($file);
            ob_start();
            require $file;
            return ob_get_clean();
        }
        else {
            throw new Exception('Vue.php error, '.$file.'is missing');
        }
    }

}