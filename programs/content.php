<?php
$title="Programs";
$dir = '../';
//$about ='active';
//$keywords ='<meta name="keywords" content="California, Los Angeles County, San Bernardino county, Riverside County, Orange County, computer service and repair">';
//$description ='<meta name="description" content="We want to bring families and individuals, the experience of a fully working computer system; laptops and desktops. We offer mostly on-site and remote services, but we will work on a physical location soon.">';


function content(){
    $titles = [
        "Commonly known as computer programs -these, are the instructions for the computer’s tasks.",
        "When it comes to choosing the right software for the job, there are many factors to consider.",
        "Here are a few steps you can take to help you make the right choice:",
        "Ultimately, the key is to find software that meets your specific needs and fits within your budget, while also being easy to use and compatible with your current setup.",
        "Open Source",
        "Free",
        "Shareware",
        "Trialware",
        "Paid",
        "Subscription",
    ];
    $links = [ 'opensource' => 'https://www.redhat.com/en/topics/open-source/what-is-open-source',

    ];
    $description = [
        '<p>Like paper
            programs, (which we get before the start of performances, like Concert Shows, a Graduation or Stage Plays.</p>
            <p>
            <strong>Software</strong> are a way to communicate to the computer user, about the computer’s ongoing performances.<br />
            Computer software, like paper programs could be considered the same idea in this instance. Much more
            different than paper programs, <ins>software</ins> contains all the necessary parts that make the whole
            show.</p>
            <p style="text-align: center;">The “stage” is the CPU,Ram,Hard drive.<br />
            The public enjoys the performance through the computer display, the performers are the programs
            themselves.</p>
            <p>Because computers can execute muti-millions of instructions per second; millions+ of performers and
            performances have to be coordinated in a way that makes the computer <b>run</b> without declaring any
            software errors, glitches, bugs, or unwanted features.)</p>',
    ];
    $programs = [
        "Click on the image",
        "Anti-Virus",
        "Malware Cleaner",
        "Web Browsers",
        "Messaging",
        "Media",
        "Runtimes",
        "Imaging",
        "Documents",
        "File Sharing",
        "Online Storage",
        "Other",
        "Utilities",
        "Compression",
        "Development Tools",
        "Read more",

        "links" => [
            "antivirus",
            "malwarecleaner",
            "webbrowsers",
            "messaging",
            "media",
            "runtimes",
            "imaging",
            "documents",
            "filesharing",
            "onlinestorage",
            "other",
            "utilities",
            "compression",
            "developertools",
        ],
    ];

    $descriptions = [
        //up to 52 word descriptions
        "av" =>
            "An anti-virus program in itself, is created to help the computer shield itself from viruses. The best antivirus solutions are the ones keeping Up to date with whats out there trying to harm the computer (PC). Also, the best antivirus solutions are simple, cost less than imagined, and bring peace of mind.",
        "mlwc" =>
            "Malware, harmful files infecting computers, can be found in spam, emails, infected drives, or bundled software. Often disguised as harmless software, malware steals data and can cause irreparable damage. To prevent infections, use paid or free antivirus solutions that offer real-time protection and background scanning.",
        "wb" =>
            "Web browsers, essential tools for accessing the internet, have evolved significantly since their early days. From text-based interfaces to modern graphical browsers, they have played a crucial role in shaping the online world. Today, browsers offer a wide range of features, from speed and security to customization options.",
        "msg" =>
            "Instant messaging enables fast communication over the internet beyond email. Modern apps support file sharing, group chats, and video/voice calls. They also allow users to make payments and play games. While the term originated in the 1990s, the concept dates back to the 1960s on multi-user operating systems like CTSS.",
        "media" =>
            "Media refers to computer representations of visual and audio formats, such as pictures, videos, and audio files. These formats shape how we interact with the digital world. From NFTs and video sites to books and image galleries, media spans various forms and enhances communication across the internet.",
        "rtimes" =>
            "Runtimes enable computer programs to execute across different systems, handling code execution for various programming languages. Lighter software generally runs faster than heavier programs requiring more system resources. As technology advances, mobile devices and laptops are improving, though they still lag behind desktops in processing power.",
        "imgs" =>
            "Humans perceive the world through senses like sight, interpreting light to form reality. In contrast, computers generate 2D images, calculating how objects appear on screens. Imaging refers to the file formats used to create these visuals. Today, computers can also bring digital designs into the physical world via 3D printing.",
        "docs" =>
            "Many types of computer files are classified as document files, used to store and organize information. Common examples in an office environment include text files (.txt), Word documents (.doc/.docx), spreadsheets (.xls/.xlsx), presentations (.ppt/.pptx), and PDFs (.pdf). These formats enable efficient data sharing, editing, and presentation across various platforms.",
        "flsha" =>
            "File sharing enables easy transfer of files between devices via cloud storage, email, or peer-to-peer networks. Popular services include Dropbox, Google Drive, and WeTransfer. Screen sharing tools like Zoom and Google Meet aid collaboration, while secure policies and password management tools ensure safety when sharing sensitive credentials.",
        "onsto" =>
            "Online storage, or cloud storage, allows users to store and access files on remote servers via the internet, offering flexibility across devices. Popular services like Google Drive, Dropbox, and OneDrive provide free storage with options to purchase more. Additional features include file sharing, collaboration tools, and backup services.",
        "oth" =>
            "Computer repair involves diagnosing and fixing various hardware and software issues. Basic troubleshooting steps include checking cable connections, ensuring the power supply is on, and verifying hardware components. If these steps fail, professional technicians can provide accurate diagnostics and solutions. Remote support services offer prompt, cost-effective technical assistance.",
        "uth" =>
            "Computer utilities manage, maintain, and optimize performance by cleaning hard drives, defragmenting disks, repairing errors, and enhancing security. Examples include antivirus software, disk cleanup tools, and system optimizers. These utilities, either built-in or standalone, improve speed and efficiency, ensuring smooth operation and preventing issues.",
        "compr" =>
            "File compression reduces file size for storage and transmission. Early methods like run-length encoding evolved into sophisticated algorithms such as LZW, used in GIF and ZIP formats. Modern compression includes MP3 and JPEG. Common formats include ZIP, RAR, TAR, GZ, and BZ2, enhancing efficiency and performance.",
        "devtools" =>
            "Here at LAtinosPC, developers enhance the website to be advanced yet user-friendly. They refine code for clarity and organization, ensuring a seamless browsing experience. Utilizing tools like Google Keep, WPS Office, Notepad++, GIMP, and WAMP, they create a better site for visitors, supported by resources like FileHippo and SourceForge.",
    ];
    $rightChoice = [
        "strong" => [
            "Define your requirements",
            "Research available options",
            "Check for compatibility",
            "Read reviews and user feedback",
            "Try before you buy",
            "Consider cost",
            "Support and updates",
            "Technical requirements",
        ],
        "descriptions" => [
            "Clearly define the specific tasks and functionality you need the software to perform. This will help you to narrow down your options and make it easier to compare different software packages.",
            "Look into the different software options available that meet your requirements. Make a list of the software packages that seem like they would be a good fit.",
            "Make sure that the software is compatible with your operating system and any other software you are currently using. Also check if the software is compatible with any hardware you are using as well.",
            "Read online reviews and user feedback to get an idea of how well the software works and how easy it is to use.",
            "Many software vendors offer free trial versions of their software, so you can test the software out before you make a purchase.",
            "Consider the cost of the software, including any additional costs for support, upgrades, or additional features. Compare the cost of different software packages and see which one offers the best value for your budget.",
            "Consider the level of support and updates provided by the software vendor. Make sure that the software will continue to be updated and supported in the future.",
            "If you are looking for software that require specific technical requirements, make sure that the software you choose meet them, for example if you are developing a mobile app, make sure that the software you choose can export the app to the platform you need.",
        ],
    ];
    $types = [
        "opensource" =>
            "This type of software is freely available for use, modification, and distribution. The source code is also available for users to view and modify.",
        "free" =>
            "This type of software is also freely available for use, but the source code may not be available for modification.",
        "shareware" =>
            "This type of software is typically available for a free trial period, after which the user must purchase a license to continue using the software.",
        "trialware" =>
            "Similar to shareware, this type of software is available for a free trial period, but typically includes more limitations or reduced functionality.",
        "paid" => "This type of software must be purchased in order to use it.",
        "subscription" =>
            "This type of software requires a recurring payment (such as a monthly or annual fee) in order to continue using the software. Examples include software as a service (SaaS) applications.",
    ];
    include_once('../content/software.php');
}
    ?>