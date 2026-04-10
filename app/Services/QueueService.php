<?php

namespace App\Services;

class QueueService
{
    /**
     * A simple implementation of a Min-Heap for SJF dispatching.
     * In a real application, this would likely be stored in a database or Redis.
     */
    private $heap = [];

    public function insert($job)
    {
        $this->heap[] = $job;
        $this->bubbleUp(count($this->heap) - 1);
    }

    public function extractMin()
    {
        if (empty($this->heap)) return null;

        $min = $this->heap[0];
        $last = array_pop($this->heap);

        if (!empty($this->heap)) {
            $this->heap[0] = $last;
            $this->bubbleDown(0);
        }

        return $min;
    }

    private function bubbleUp($index)
    {
        while ($index > 0) {
            $parent = floor(($index - 1) / 2);
            if ($this->heap[$index]['duration'] >= $this->heap[$parent]['duration']) break;
            $this->swap($index, $parent);
            $index = $parent;
        }
    }

    private function bubbleDown($index)
    {
        $size = count($this->heap);
        while (true) {
            $left = 2 * $index + 1;
            $right = 2 * $index + 2;
            $smallest = $index;

            if ($left < $size && $this->heap[$left]['duration'] < $this->heap[$smallest]['duration']) {
                $smallest = $left;
            }
            if ($right < $size && $this->heap[$right]['duration'] < $this->heap[$smallest]['duration']) {
                $smallest = $right;
            }

            if ($smallest === $index) break;
            $this->swap($index, $smallest);
            $index = $smallest;
        }
    }

    private function swap($i, $j)
    {
        $temp = $this->heap[$i];
        $this->heap[$i] = $this->heap[$j];
        $this->heap[$j] = $temp;
    }

    public function getHeap()
    {
        return $this->heap;
    }
}
