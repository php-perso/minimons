<?php
class Board
{
    private $_nom;
    private $_titres = "";
    private $_rows = array ();

    public function __construct($nom)
    {
        $this->_nom = $nom;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function showNom()
    {
        $nom = "<h3 id='".$this->getNom()."'>";
        $nom .= $this->getNom();
        $nom .= "</h3>";
        return $nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getTitre()
    {
        return $this->_titres;
    }

    public function addTitre($titre)
    {
        if (!empty( $this->_titres))
        {
            $this->_titres .= ",";
        }
        $this->_titres .= $titre;
        
    }

    public function showTitre()
    {
        if (!empty($this->_titres))
        {
            $headBoard = "<tr>";
            $titres = explode(",", $this->_titres);
            foreach ($titres as $titre)
            {
                $headBoard .= "<th>";
                $headBoard .= $titre;
                $headBoard .= "</th>";
            }
            $headBoard .= "</tr>";
            return $headBoard;
        }
        else
        {
            return null;
        }
    }

    public function getRows()
    {
        return var_dump($this->_rows);
    }

    public function addRow($infos = array())
    {
        $stringInfos = "";
        foreach ($infos as $info)
        {
            if ($stringInfos != "")
            {
                $stringInfos .= "/";
            }
            $stringInfos .= $info;
        }
        $this->_rows[] = $stringInfos;
    }

    public function showCorps()
    {
        if (!empty($this->_rows[0]))
        {
            $bodyBoard = "";
            foreach ($this->_rows as $row)
            {
                $bodyBoard .= "<tr>";
                $infosRow = explode("/", $row);
                foreach ($infosRow as $info)
                {
                    $bodyBoard .= "<td>";
                    $bodyBoard .= $info;
                    $bodyBoard .= "</td>";                    
                }
                $bodyBoard .= "</tr>";
            }
            return $bodyBoard;
        }
        else
        {
            return null;
        }
    }
}

?>