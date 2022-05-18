<?php
    class Entity_Phongban{
        public $IDPB;
        public $Tenpb;
        public $MoTa;
        
        public function __construct($_IDPB, $_Tenpb, $_MoTa)
        {
            $this->IDPB = $_IDPB;
            $this->Tenpb = $_Tenpb;
            $this->MoTa = $_MoTa;
        }
    }
?>