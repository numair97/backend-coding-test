<?php

    function groupByOwners($files)
    {
        $groupedFiles = [];

        foreach ($files as $filename => $owner) {
            if (!isset($groupedFiles[$owner])) {
                $groupedFiles[$owner] = [];
            }

            $groupedFiles[$owner][] = $filename;
        }

        return $groupedFiles;
    }
$files = [
    "insurance.txt" => "Company A",
    "letter.docx" => "Company A",
    "Contract.docx" => "Company B"
];

$groupedFiles = groupByOwners($files);

print_r($groupedFiles);