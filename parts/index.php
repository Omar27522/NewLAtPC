<?php
include_once('../code/functions.php');

$title = "Hardware";
$dir = '../';

function content() {
    $hardwareTitles = [
        'cc'   => 'Console Controllers',
        'cpu'  => 'CPU',
        'ram'  => 'RAM',
        'ssd'  => 'SSD',
        'psu'  => 'PSU',
        'gpu'  => 'Graphics Cards',
        'pci'  => 'PCI Cards',
        'mouse' => 'Mouse',
        'desk'  => 'Desks',
        'chair'  => 'Chairs',
        'cooling'=> 'Cooling',
        'tablet' => 'Tablets',
        'micro'  => 'Microphones',
        'monitor' => 'Display',
        'headset' => 'Headsets',
        'printer' => 'Printers',
        'scanner' => 'Scanners',
        'chassis'  => 'Computer Case',
        'keyboard'  => 'Keyboard',
        'joystick'  => 'Joysticks',
        'headphone' => 'Headphones',
        'p_memory'  => 'Portable Memory',
        'controller' => 'Controllers',
        'audiomixer' => 'Audio Mixers',
        'motherboard' => 'Motherboard',
        'pencil' => 'Pens, Pencils and Tablets',
        'antislipmats' => 'Anti-Slip Mats',
        'speakers_and_subwoofers' => 'Speakers and Subwoofers',
        'team_uniformity_authority' => 'Uniforms'
    ];

    $title = 'Hardware'; // Default title
    foreach ($hardwareTitles as $key => $value) {
        if (isset($_GET[$key])) {
            $title = $value;
            break;
        }
    }

    // Keywords and descriptions.
    if (isset($_GET)) {
        switch (key($_GET)) {
            case 'cpu':
                $keywords = '<meta name="keywords" content="CPU, Processor, Computer Processor, CPU Models, CPU Specs, CPU Performance, Desktop CPU, Laptop CPU, Intel CPU, AMD CPU, Multi-core CPU, CPU Cooling">';
                $description = '<meta name="description" content="Discover a variety of CPUs including Intel and AMD processors. Explore different models and specifications to find the perfect CPU for your desktop or laptop. Learn about CPU performance, multi-core options, and cooling solutions to enhance your computing experience.">';
                break;
            // [All your other cases remain the same]
            default:
                $keywords = '<meta name="keywords" content="CPU, RAM, HDD, SSD, MainBoard, PSU, I/O Devices, Peripherals, GPU, Chassis, Coolers, Mouse, Keyboard, Display, External Drives, PCI Cards, Scanners, Printers, Console Controllers, Joysticks, Tablets, Microphones, Headsets, Audio Mixer, Controllers, Gaming Uniforms, Pens, Pencils, Chairs, Desks, Anti-slip Mats, Speakers and Subwoofers">';
                $description = '<meta name="description" content="Explore a wide range of computer components and peripherals including CPU, RAM, HDD, SSD, MainBoard, PSU, I/O devices, Peripherals, GPU, Chassis, Coolers, Mouse, Keyboard, Display, External Drives, PCI Cards, Scanners, Printers, Console Controllers, Joysticks, Tablets, Microphones, Headsets, Audio Mixer, Controllers, Gaming Uniforms, Pens, Pencils, Chairs, Desks, Anti-slip Mats, Speakers, and Subwoofers. Find everything you need for your computer and gaming setup." />';
                break;
        }
    }

    $hw = 'en';
    $include_path = '../include/_works/_hardware/';
    $hardware_path = '../hardware/';

    if (isset($_GET)) {
        switch (key($_GET)) {
            case 'cpu':
                include ($hardware_path . 'cpu.php');
                include ($include_path . 'cpu.php');
                break;
            // [All your other cases remain the same]
            default:
                include ('../content/hardware.php');
                break;
        }
    }
}

include_once('../code/functions.php');
include ('../code/html_structure/page.php');
?>