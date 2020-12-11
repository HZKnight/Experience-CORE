<?php
    
    namespace Experience\Core\Config\Exceptions;
	
    use Experience\Core\Exceptions\EException;
	
    /*
     * Copyright (C) 2020 HZKnight
     *
     * This program is free software: you can redistribute it and/or modify
     * it under the terms of the GNU Affero General Public License as published by
     * the Free Software Foundation, either version 3 of the License, or
     * (at your option) any later version.
     *
     * This program is distributed in the hope that it will be useful,
     * but WITHOUT ANY WARRANTY; without even the implied warranty of
     * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     * GNU Affero General Public License for more details.
     *
     * You should have received a copy of the GNU Affero General Public License
     * along with this program.  If not, see <http://www.gnu.org/licenses/agpl-3.0.html>.
     */
	
    /**
     *  questa eccezione si verifica quando ci sono problemi con il file di configurazione
     *
     *  @author Luca Liscio <lucliscio@h0model.org>
     *  @author Marco Lettieri
     *  @version 0.0.3 2020/11/29 20:51:20
     *  @copyright &copy;2020 HZKnight
     *  @copyright &copy;2013 Luca Liscio & Marco Lettieri
     *  @license http://www.gnu.org/licenses/agpl-3.0.html GNU/AGPL3
     *
     *  @package Experience
     *  @subpackage Core\Config\Exception
     *  @filesource
     */
    
    class ConfigException extends EException {
        protected $code = "C01"; 
    }
?>