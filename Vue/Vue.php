<?php

class Vue {

    private string $file;
    private ?string $focusNavbarHome = null; // ?string means string default value can be null 
    private ?string $focusNavbarReserv = null;
    private string $title;
    private string $subtitle;
    private $nameUser;

    public function __construct($action)
    {
        $this->file = 'Vue/vue'.$action.'.php';
    }

    public function generate($data) {
        $content = $this->generateFileWithArray($this->file, $data);
        $vue = $this->generateFileWithArray('Vue/template.php', array(
                                                                        'title'=>$this->title, 
                                                                        'subtitle'=>$this->subtitle,
                                                                        'nameUser'=>$this->nameUser, 
                                                                        'focusNavbarHome'=>$this->focusNavbarHome,
                                                                        'focusNavbarReserv'=>$this->focusNavbarReserv,
                                                                        'content'=>$content));

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