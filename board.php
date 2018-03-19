<?php
class Board
{
    private $_titres = "";
    private $_rows = array ();

    public function __construct()
    {
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
            $headBoard = "";
            $titres = explode(",", $this->_titres);
            foreach ($titres as $titre)
            {
                $headBoard .= "<th>";
                $headBoard .= $titre;
                $headBoard .= "</th>";
            }
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

    public function addRow($level, $cout, $description)
    {
        $this->_rows[] = $level . "/" . $cout . "/" . $description;
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