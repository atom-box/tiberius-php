<?php

class ElevenController {
    public function specialEleven(int $n): string{
        // echo('Received: '.$n);
        if (0 === $n % 11) { return 'true';}
        if (0 === ($n-1) % 11) { return 'true';}
        return 'false';
    }
}