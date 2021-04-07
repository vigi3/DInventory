<?php

class Vue {

    private string $file;
    private $content;
    private $title;

    public function __construct($action)
    {
        $this->file = 'Vue/vue'.$action.'.php';
    }

    public function generate($data) {
        $content = $this->generateFileWithArray($this->file, $data);
        $vue = $this->generateFileWithArray('Vue/template.php', array('name'=>$this->name, 'content'=>$this->content));

        echo $vue;
    }

    public function generateLoginVue() {
        $vue = $this->generateFile($this->file);

        echo $vue;
    }

    private function generateFile($file)
    {
        if(file_exists($file)){
            ob_start();
            require $file;
            return ob_get_clean();
        }
        else {
            throw new Exception('Vue.php error, '.$file.'is missing');
        }
    }



    private function generateFileWithArray($file, $data)
    {
        if(file_exists($file)){
            extract($data);
            ob_start();
            require $file;
            return ob_get_clean();
        }
        else {
            throw new Exception('Vue.php error, '.$file.'is missing');
        }
    }

}