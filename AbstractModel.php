<?php
class AbstractModel {
    public function getCPA($cost, $cv) {
        if ($cv != 0) {
            return $cost / $cv;
        } else {
            return false;
        }
    }
}
?>