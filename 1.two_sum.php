<?php

// Give an array of interges nums and an integer target, 
// return indices of the two numbers such that they add up to target
// Ex: input: nums = [2,7,11,15], target = 9
// output: [0,1], Because nums[0] + nums[1] = 9, we return [0,1]


// way 1
function twoSum1($nums, $target) {
    for($i = 0 ; $i < count($nums); $i++)
    {
        for($j = $i + 1; $j < count($nums); $j++)
        {
            if($nums[$i] + $nums[$j] == $target)
            {
                return [$i, $j];
            }
        }
    }

    return [];
}

// way 2
function twoSum2($nums, $target) {
    for($i = 0 ; $i < count($nums); $i++)
    {
        $diff = $target - $i;
        $diffIndex = array_search($diff, $nums);

        if($diffIndex !== false && $diffIndex !== $i)
        {
            return [$i, $diffIndex];
        }
    }

    return [];
}