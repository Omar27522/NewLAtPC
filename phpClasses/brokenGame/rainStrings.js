const rainStrings = [
    // Hex and binary values
    '0xF3A9', '0x1B', '0xC0DE', '0x7F', '0x404', '101010', '11001100', '01101101', '01010101',
    '0xCAFE', '0xBEEF', '0xC0FFEE', '0b1011',

    // Hello World in different languages
    'Hello, World!', 'こんにちは世界', 'Привет, мир!', 'Hola Mundo', 'Bonjour le monde', 'Hallo Welt',
    '你好，世界', '안녕하세요 세계', 'שלום עולם', 'مرحبا بالعالم',

    // Programming language examples
    'printf("C!");', // C
    'System.out.println("Java!");', // Java
    'console.log("JavaScript!");', // JavaScript
    'print("Python!")', // Python
    'echo "PHP!";', // PHP
    '<?php echo "PHP!"; ?>', // PHP full tag
    '<?= "PHP!" ?>', // PHP short echo
    'puts "Ruby!"', // Ruby
    'fmt.Println("Go!")', // Go
    'cout << "C++!";', // C++
    'Console.WriteLine("C#!");', // C#
    'disp("MATLAB!");', // MATLAB
    'PRINT *, "Fortran!"', // Fortran
    'io:format("Erlang!~n")', // Erlang
    'System.out.print("Java!");', // Java
    'document.write("JavaScript!");', // JavaScript in browser
    'Response.Write("ASP!");', // ASP
    'echo("PHP!");', // PHP
    '<%= "Ruby on Rails!" %>', // JSP/ERB
    'SELECT "SQL!";', // SQL
];
const rainFontSize = 50;

window.goodTags = rainStrings;
window.badTags = rainFontSize;

// Export using CommonJS syntax since you're using require() in your main file
export { rainStrings, rainFontSize };