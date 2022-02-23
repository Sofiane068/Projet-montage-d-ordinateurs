

<?php
class Cartemere extends Piece {
    protected ?bool $socket___chipset;
    protected ?string $format_;
    
   

    /**
     * Get the value of socket
     */ 
    public function getSocket()
    {
        return $this->socket___chipset;
    }

    /**
     * Set the value of socket
     *
     * @return  self
     */ 
    public function setSocket(bool $socket___chipset)
    {
        $this->socket___chipset = $socket___chipset;

        return $this;
    }

    /**
     * Get the value of format
     */ 
    public function getFormat()
    {
        return $this->format_;
    }

    /**
     * Set the value of format
     *
     * @return  self
     */ 
    public function setFormat(string $format_)
    {
        $this->format_ = $format_;

        return $this;
    }
}