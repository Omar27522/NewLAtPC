<?php

$title = "Hardware";
$dir = '../';

function content() {
    $title="<h2>The Hardware is the computer — it&#39;s physical components.</h2>";

$description ="<p>These components may include the computer&#39;s
    functionality, design, materials, innovations, thermals, etc.<br />A computer is an electronic device that
    manipulates data or information. It has the ability to store,retrieve, and process data.<p>     <!--https://unsplash.com/photos/2sILr4DwabQ-->
    <h3><a href=\"https://latinospc.com/hardware/?anatomy_of_a_computer#navi\">The anatomy of a computer</a> typically includes,
<a href=\"https://latinospc.com//hardware/?notebooks#navi\">Laptops</a>, Portable, Smart Devices, Modular PC's, ETC.</h3>";

$contentSubTitles= ["Computer Parts",       "Central Processing Unit (CPU):",       "Memory (RAM):",        "Memory Storage Drive (hard drive, SSD):",
                        "Motherboard:",        "Power Supply Unit (PSU):",      "GPU:",       "Chassis:",       "Coolers",      "Input/Output devices:", "Peripheral devices:"  ];

$content=['CPU' =>  "The \"brain\" of the computer, responsible for carrying out instructions of computer programs.",
            'RAM' =>  "Stores data that the CPU uses in the short-term.",
                'HDD' =>  "Persistently stores data, even when the computer is powered off.",
                    'Motherboard' =>  "The main circuit board in a computer, which houses the CPU, memory, and other components.&nbsp;",
                        'PSU' =>  "Converts AC power from a wall outlet into DC power used by the computer.",
                            'GPU' =>  "specialized Graphic Processing Unit (GPU) that handles the computational heavy lifting needed for tasks.&nbsp ",
                                'Chassis' =>  "Houses all the internal components a computer needs.",
                                    'Coolers' =>  "Help to regulate the temperature of the central processing unit (CPU) and other critical components of the computer.",
            'I/O' =>  "Allow data to be input into the computer (such as a keyboard and mouse) and output from the computer (such as a display and speakers).&nbsp",
            'Peripherals' =>  "Additional hardware connected to a computer, such as printers, scanners, and external hard drives.&nbsp"
         ];
$peripherals = [
"Mouse",
"Keyboard",
"Display",
"External Memory Drives",
"PCI Cards",
"Power Supply",
"Cooling",
"GPU",
"Scanners",
"Printers",
"Console Controllers",
"Joystick",
"Tablets",
"Microphones",
"Headsets",
"Headphones",
"Audio Mixers",
"Controllers",
"Gaming Uniforms",
"Pens, Pencils & Tablets",
"Chairs",
"Desks",
"Anti-Slip Mats",
"Speakers and Subwoofers",
"Peripherals",
];

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