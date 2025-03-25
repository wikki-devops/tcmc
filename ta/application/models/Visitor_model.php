<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visitor_model extends CI_Model
{

    private $counterFile = APPPATH . 'counter.txt';

    public function increment_count()
    {
        if (!file_exists($this->counterFile)) {
            file_put_contents($this->counterFile, 0);
        }

        $visitorCount = (int)file_get_contents($this->counterFile);
        $visitorCount++;
        file_put_contents($this->counterFile, $visitorCount);

        // Log the visitor count for debugging
        log_message('debug', 'Visitor count is: ' . $visitorCount);

        return $visitorCount;
    }
}
