<?php
    # Program: spa-idioms.php
    #    Date: 28-Apr-2023
    #  Author: gerry.walterscheid@gmail.com
    # Descrip: Display random idiom followed by its meaning.

    session_start();
    header("Content-type: text/xml");

    $delay = 60;
    header("Refresh:$delay");

    $urlPath = "http://192.168.3.250/cisco/spa-idioms.php";

    $idiom = array(
        "Subirse al carro.", 
        "To jump on the bandwagon.",

        "Esta ronda la pago yo.", 
        "This round's on me.",

        "Lo importante es participar.", 
        "The important thing is to participate.",

        "Ni mas ni menos.", 
        "No more, no less.",

        "Unas veces se gana, otras se pierde.",
        "You win some you loose some.",

        "Luchar por una causa perdida.",
        "To fight for a lost cause.",

        "Tirar la toalla.",
        "To throw in the towel.",

        "No hay peor sordo que el que no quiere oir.",
        "No one's as deaf as those who don't want to listen.",

        "Te invito.", 
        "My treat.",

        "Cuando se cierra una puerta, se abre una ventana.", 
        "Where one door closes, another one opens.",

        "Cada una tiene lo que se merece.", 
        "People get what they deserve.",

        "La curiosidad mato al gato.", 
        "Curiosity killed the cat.",

        "Tener enchufe.",
        "To be well connected.",

        "No muerdas la mano que te da de comer.",
        "Don't bite the hand that feeds you.",

        "En casa del herrero, cuchillo de palo.",
        "The shoemaker's son always goes barefoot.",

        "Mas vale lo malo conocido que lo bueno por conocer.",
        "Better the devil you know than the devil you don't.",

        "Cuando el gato no esta, los ratones bailan.",
        "When the cat is away, the mice will play.",

        "Ser un bicho raro.",
        "To be a freak or weirdo.",

        "Estar forrado.",
        "To be loaded (rich).",

        "Estirar la pata.",
        "To kick the bucket.",

        "De tal palo, tal astilla.",
        "Like father, like son; The apple doesn't fall far from the tree.",

        "Matar dos pajaros de un tiro.",
        "To kill two birds with one stone.",

        "Ojos que no ven, corazon que no siente.",
        "What the eye doesn't see, the heart doesn't grieve over.",

        "No es oro todo lo que reluce.",
        "All that glitters is not gold.",

        "Ser un don nadie.",
        "To be a nobody.",

        "Las penas compartidas saben a menos.",
        "Two in distress makes sorry less.",

        "Salir del armario.",
        "To come out of the closet (to be gay).",

        "Es la gota que colma el vaso.",
        "It's the straw that breaks the camel's back.",

        "Sobre gustos no hay nada escrito.",
        "There's no accounting for tastes.",

        "Estar como unas castanuelas.",
        "To be happy as a clam.",

        "Las apariencias enganan.",
        "Looks can be deceiving.",

        "En la variedad esta el gusto.",
        "Variety is the spice of life.",

        "Ser un pez gordo.",
        "To be a big fish.",

        "Mas vale mana que fuerza.",
        "Brain over brawn.",

        "Al pan, pan y al vino, vino.",
        "To call a spade a spade.",

        "Hoy por ti, manana por mi.",
        "You scratch my back I'll scratch yours.",

        "Quien no arriesga, no gana.",
        "Nothing ventured, nothing gained.",

        "Perro ladrador, poco mordedor.",
        "Barking dogs never bite.",

        "Mas vale prevenir que curar.",
        "Better to prevent than to cure.",

        "Hacer el mono.",
        "To be the clown.",

        "No hay mal que por bien no venga.",
        "Every cloud has a silver lining.",

        "Todos los caminos llevan a roma.",
        "All roads lead to Rome.",

        "Tener mala leche.",
        "To be a bad apple.",

        "Romper el hielo.",
        "To break the ice.",

        "Dios los cria y ellos se juntan.",
        "Birds of a feather flock together.",

        "Mas vale tarde que nunca.",
        "Better late than never.",

        "Ser la media naranja.",
        "To be the better half.",

        "Meter la pata.",
        "Screw up.",

        "Ser un chaquetero.",
        "To be a flip-flopper.",

        "A buen entendedor pocas palabras bastan.",
        "A word to the wise.",

        "Quien fue a Sevilla, perdio su silla.",
        "You snooze, you loose.",

        "Pillarse un pedo.",
        "To get drunk.",

        "Estar como una cabra.",
        "To be crazy.",

        "Ser pan comido.",
        "Easy as pie.",

        "Por si las moscas.",
        "Just in case.",

        "Hacer la pelota.",
        "To suck up.",

        "Arrimar el hombro.",
        "Give a hand.",

        "Ser un cero a la izquierda.",
        "To be worthless.",

        "Costar un ojo de la cara.",
        "To cost an arm and a leg.",

        "Cada dos por tres.",
        "To happen frequently.",

        "Buscarle tres pies al gato.",
        "To make something more complicated than necessary.",

        "Ser cuatro gatos.",
        "To be very few people.",

        "Entrar los siete males.",
        "To be in hell.",

        "Mas chulo que un ocho.",
        "To be too cool.",

        "Meterse en camisas de once varas.",
        "To make a mountain out of a mole hill.",

        "Seguir en sus trece.",
        "To be headstrong or stubborn.",

        "Ser un chorizo.",
        "To be a thief.",

        "Ser carne de canon.",
        "To be fish bait, or thrown under the bus.",

        "Estar mala uva.",
        "To be grumpy, in a bad mood.",

        "Estar como un fideo.",
        "To be thin as a rail.",

        "Estar como una sopa.",
        "To be soaked to the bone.",

        "Importar un pimiento.",
        "Doesn't matter.",

        "Ostras!",
        "Holy moley!",

        "Estar hasta las narices.",
        "To be fed up.",

        "Hacerse la boca agua.",
        "To make ones mouth water.",

        "Estar con el agua al cuello.",
        "To be up to your neck.",

        "Echar una mano a alguien.",
        "To lend a hand.",

        "Meterse hasta la cabeza en algo.",
        "To be fully involved, or completely immersed.",

        "No dar pie con bola.",
        "Can't do anything right.",

        "Poner el mal tiempo, buena cara.",
        "To put on a happy face; look on the bright side.",

        "Hablar por los codos.",
        "To talk a lot.",

        "Levantarse con mal pie.",
        "To wake up on the wrong side of the bed.",

        "No pegar ojo.",
        "To not sleep a wink.",

        "Estar loco con contento.",
        "To be over the moon.",

        "Perro flaco, todo son pulgas.",
        "It never rains but it pours; when it rains, it pours.",

        "Fue bonito mientras duro.",
        "It was good while it lasted.",

        "Cada loco con su tema.",
        "To each his own.",

        "Quien rie el ultimo, rie mejor.",
        "He who laughs last, laughs best.",

        "Esto es cosa de dos.",
        "It takes two to tango.",

        "Ser un caracol.",
        "To be very slow.",

        "Esto es cosa de dos.",
        "It takes two to tango.",

        "Donde comen dos, comen tres.",
        "There's always room for one more.",

        "No por mucho madrugar, amanece mas temprano.",
        "Getting up early doesn't make the sun rise sooner.",

        "De ninguna manera!",
        "No way!",

        "Irse por las ramas.", 
        "To beat around the bush.",
        
        "Asi es la vida.", 
        "That's life.",
        
        "No buscarle pulgas al perro.", 
        "Let sleeping dogs lie.",
        
        "Hacer borron y cuenta nueva.", 
        "Wipe the slate clean.",
        
        "Ahogar las penas.", 
        "To drown ones sorrows.",
        
        "Todo a su debido tiempo.", 
        "All in good time.",
        
        "Estar frito.", 
        "To be sleeping.",
        
        "Ligarse a alguien.", 
        "To hook up; pick up someone.",
        
        "Cuenta conmigo.", 
        "Count me in.",
        
        "Dar en el clavo.", 
        "Hit the nail on the head.",
        
        "Ya estamos otra vez.", 
        "Here we go again.",
        
        "Hacer puente.", 
        "Take a long holiday weekend.",
        
        "Dar alguien con la puerta en las narices.", 
        "To slam the door in someone's face.",
        
        "Mala hierba nunca muere.", 
        "The bad ones never die.");

    $count = 107;

    function FisherYatesIndex($n) {

        # Create array of n elements containing indexes.
        $arr = [];

        for ($i = 0; $i < $n; $i++)
            $arr[$i] = $i;

        # Perform index shuffle.
        for($i = $n - 1; $i > 0; $i--) {
            $r = rand(0, $i); $tmp = $arr[$i];
            $arr[$i] = $arr[$r];
            $arr[$r] = $tmp; }

        return $arr; }

    # Recall prior variable state
    $id = $_SESSION['id'] ?? "";                # App name.

    # Prevent data corruption to next application.
    if ($id == "spa-idioms") {
        $lastCmd = $_SESSION['cmd'] ?? 0;        # User command.
        $mode = $_SESSION['mode'] ?? 0;          # Current mode.
        $ndx = $_SESSION['ndx'] ?? 0;            # Current index.
        $rndNdx = $_SESSION['rndNdx'] ?? 0;      # Random index.
        $update = $_SESSION['update'] ?? 0; }    # Time from prior page update.
    else {
        $mode = 0;
        $ndx = 0;
        $rndNdx = FisherYatesIndex($count); 
        $update = 0; }

    # Get SoftKey selection.
    $cmd = $_GET['key'] ?? 0;

    # Check page refresh delay.
    if (time() - $update < $delay)

        # Process user request based on the key pressed.	
        switch($cmd) {

        case 1 : # mode
            $mode = ++$mode % 2;
            break;

        case 2 : # previous
            if (--$ndx < 0)
                $ndx = $count - 1;

            $mode = 0;
            break;

        case 3 : # next
            if (++$ndx == $count)
                $ndx = 0;

            $mode = 0;
            break;
        }

    else {
        # Advance to next item after displaying answer.
        $ndx = ++$ndx % $count;
        $mode = 0; }

    # Update the indexes on both fields.
    $i = $rndNdx[$ndx] * 2;
    $j = $i + 1;

    switch($mode) {

    case 0 : # Item
        echo "<CiscoIPPhoneText>\n";
        echo "  <Title>Spanish Idioms - Expression</Title>\n";
        echo "  <Text>$idiom[$i]</Text>\n";

        $label = "More";
        $msg = "";
        break;

    case 1 : # Example
        echo "<CiscoIPPhoneText>\n";
        echo "  <Title>Spanish Idioms - Explained</Title>\n";
        echo "  <Text>$idiom[$j]</Text>\n";

        $label = "Back";
        $msg = "Use arrows to view all text.";
        break;
    }

    echo "  <SoftKeyItem>\n";
    echo "    <Name>$label</Name>\n";
    echo "    <URL>$urlPath?key=1</URL>\n";
    echo "    <Position>1</Position>\n";
    echo "  </SoftKeyItem>\n";

    echo "  <SoftKeyItem>\n";
    echo "    <Name>Prev</Name>\n";
    echo "    <URL>$urlPath?key=2</URL>\n";
    echo "    <Position>2</Position>\n";
    echo "  </SoftKeyItem>\n";

    echo "  <SoftKeyItem>\n";
    echo "    <Name>Next</Name>\n";
    echo "    <URL>$urlPath?key=3</URL>\n";
    echo "    <Position>3</Position>\n";
    echo "  </SoftKeyItem>\n";

    echo "  <SoftKeyItem>\n";
    echo "    <Name>Exit</Name>\n";
    echo "    <URL>SoftKey:Exit</URL>\n";
    echo "    <Position>4</Position>\n";
    echo "  </SoftKeyItem>\n";

    echo "  <Prompt>$msg</Prompt>\n";
    echo "</CiscoIPPhoneText>";

    # Save current variable state.
    $_SESSION['id'] = "spa-idioms";
    $_SESSION['cmd'] = $cmd;
    $_SESSION['mode'] = $mode;
    $_SESSION['ndx'] = $ndx;
    $_SESSION['rndNdx'] = $rndNdx;
    $_SESSION['update'] = time();
?>
