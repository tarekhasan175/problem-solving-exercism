<?php

class Lasagna
{
    // 1. Expected cook time (40 minutes)
    public function expectedCookTime(): int
    {
        return 40;
    }

    // 2. Remaining cook time
    public function remainingCookTime(int $elapsed_minutes): int
    {
        return $this->expectedCookTime() - $elapsed_minutes;
    }

    // 3. Preparation time (2 minutes per layer)
    public function totalPreparationTime(int $layers_to_prep): int
    {
        return $layers_to_prep * 2;
    }

    // 4. Total elapsed time (prep time + already elapsed cook time)
    public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
    {
        return $this->totalPreparationTime($layers_to_prep) + $elapsed_minutes;
    }

    // 5. Alarm (always return this message)
    public function alarm()
    {
        return "Ding!";
    }
}
