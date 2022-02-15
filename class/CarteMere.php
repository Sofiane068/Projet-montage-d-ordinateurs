

<?php
class Cartemere extends Piece {
    protected ?bool $socket;
    protected ?string $format;
    
   

    /**
     * Get the value of socket
     */ 
    public function getSocket()
    {
        return $this->socket;
    }

    /**
     * Set the value of socket
     *
     * @return  self
     */ 
    public function setSocket(bool $socket)
    {
        $this->socket = $socket;

        return $this;
    }

    /**
     * Get the value of format
     */ 
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set the value of format
     *
     * @return  self
     */ 
    public function setFormat(string $format)
    {
        $this->format = $format;

        return $this;
    }
}