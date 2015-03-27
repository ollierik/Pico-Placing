<?php
class Pico_Placing {

/**
 * Pico-Placing
 * Copyright (c) 2014 Olli Erik Keskinen
 * All rights reserved.
 * 
 * This code is released under The BSD 2-Clause License.
 * See the file LICENSE.txt for information.
 *
 * @author Olli Erik Keskinen
 * @license http://opensource.org/licenses/BSD-2-Clause
 */

	public function before_read_file_meta(&$headers) {
		$headers['placing'] = 'Placing';
	}

	//get_page_data(&$data, $page_meta)
	public function get_page_data(&$data, $page_meta) {
		$data['placing'] = isset($page_meta['placing']) ? intval($page_meta['placing']) : 0;
	}

	public function get_pages(&$pages, &$current_page, &$prev_page, &$next_page) 
	{
            global $config;
            if ($config['pages_order_by'] = 'placing') {
            $sorted_pages = array();

            $amountDigits = strlen($this->getHighestPlacing($pages));

            $placing_id = 0;
            foreach ($pages as $page) {
                $sorted_pages[ $this->formatAmountDigits($page['placing'], $amountDigits) . '-' . $placing_id ] = $page;
                $placing_id++;
            }

            ksort($sorted_pages);
            $pages = $sorted_pages;
        }
    }
	
    /**
     * @param array $pages
     * @return int
     */
    private function getHighestPlacing(array $pages)
    {
        $highest = 0;
        foreach($pages as $page) {
            $placing = intval($page['placing']);
            if( $placing > $highest ) {
                $highest = $placing;
            }
        }

        return $highest;
    }

    /**
     * @param int|string $number
     * @param int $digits
     * @return string
     */
    private function formatAmountDigits($number, $digits)
    {
        while( strlen($number) < $digits ) {
            $number = '0' . $number;
        }

        return $number;
    }

}
?>
