$nums_after_adding_ten = array_map(function($item){return $item +10;},$nums);//anon func
echo'<pre>';
print_r($nums_after_adding_ten);
echo '</pre>';



echo '<br>';
//arrow fun..
$say_hola = fn($someone)=>"hola $someone";
echo '<br>';




//string
$str = "elzero";
echo "first letter is $str[0]<br>";
echo "4th letter is $str[3]<br>";
echo "number of letters " . strlen($str) . "<br>";
echo "last letter is $str[-1]<br>";
echo "last letter is {$str [strlen ($str) - 1]}<br>";

echo $str . "<br>";
$str[0]= "a";//alzero


echo '<br>';

echo lcfirst("Elzero Web School") ."<br>"; //just lower first letter
echo ucfirst("elzero Web School") . "<br>";// just up firt letter
echo strtolower("elzero Web School") . "<br>";// lower all 
echo strtoupper("elzero web school") . "<br>";// upper all

echo '<br>';
echo ucwords("elzero web school"). "<br>";// upper the first letter of every words
echo str_repeat("elzero",3);//repeat

echo '<br>';
// string function
$frinds = ["ahmed" , "osama", "ali", "salem"];
echo implode("",$frinds) . "<br>";
echo implode(",",$frinds)."<br>";
echo implode("@@",$frinds) . "<br>";
echo implode($frinds) . "<br>";
$str = "elzero web school is cool ";


echo "<pre>";
print_r(explode(".", $str));
echo "</pre>";

echo "<pre>";
print_r(explode("I", $str));
echo "</pre>";


echo "<pre>";
print_r(explode(".", $str , 0));//0=> one elemint 
echo "</pre>";

echo str_shuffle("elzero")."<br>";
echo strrev("elzero")."<br>";

echo "...elzero.."."<br>";
echo trim("...elzero..")."<br>";

echo trim("#elzero###",'#')."<br>";
 

echo '<br>';

echo chunk_split("elzero web school",3,"@");
echo '<br>';


echo '<pre>';
print_r(str_split("elzero"));
echo '</pre>';

echo '<pre>';
print_r(str_split("elzero",2));
echo '</pre>';

echo '<br>';

echo strip_tags("<h3>hello <b>elzero</b></h3>");
echo '<br>';

echo strip_tags("<h3>hello <b>elzero</b></h3>");
echo '<br>';
echo nl2br("elzero\nweb\nschool",true);


echo '<br>';

var_dump(strpos("hello hello","h"));//index0
echo '<br>';
var_dump(strpos("hello hello","h",3));//index6
echo '<br>';
var_dump(strpos("hello hello","h",6));//index 6
echo '<br>';
var_dump(strpos("hello hello","H"));//false not found its senstive
echo '<br>';
var_dump(strpos("hello hello","h,-2"));//false
echo '<br>';
var_dump(strpos("hello hello","h",-5));//false
echo '<br>';

var_dump(strpos("hello hello","h",-11));//h

echo '<br>';
var_dump(strrpos("hello hello","h"));//6

echo '<br>';
var_dump(strrpos("hello hello","h",5));//6
echo '<br>';
var_dump(stripos("hello hello","H"));//insensitive
echo '<br>';
var_dump(substr_count("hello hello","he"));//2
echo '<br>';
var_dump(substr_count("hello hello","he",1));//1

echo '<br>';
var_dump(substr_count("hello hello","he",1,6));//0

echo '<br>';
var_dump(substr_count("abcdabcda","abcda",1));//1

echo '<br>';

parse_str("name=osama&email=o@nn.sa&os=mac",$query);
echo"<pre>";
print_r($query);
echo "</pre>";
echo $query["name"]."<br>";
echo $query["email"]."<br>";
echo $query["os"]."<br>";
echo "hello [] () * + <br>";
echo quotemeta("hello [] () * + . <br>");


echo str_pad("12",8,0,STR_PAD_BOTH) . "<br>";
echo str_pad("321",8,0,STR_PAD_LEFT) . "<br>";
echo str_pad("1313",8,0) . "<br>";
echo str_pad("15435",8,0) . "<br>";
echo str_pad("500432",8,0) . "<br>";

echo strtr("elzero web schoo@","@","1");

echo '<br>';
$translation=['@'=>"1","#"=>"o"];

echo strtr("elzer# web sch##@",$translation);
echo '<br>';

echo str_replace("@","o","elzer@ web sch@@l",$r);//elzero web school

echo '<br>';
echo "replace count is $r";//3
echo '<br>';
echo str_replace(["#","@"],"a","elzer@ web sch@@l",$r);//elzero web school


echo '<br>';


echo substr_replace("onetwo",1,0);//1
echo '<br>';
echo substr_replace("onetwo",1,3);//one1

echo '<br>';
echo substr_replace("onetwo",1,-1);//onetw1

echo '<br>';
echo substr_replace("onetwo",2,2);//on2

echo '<br>';
echo substr_replace("onetwo",2,2,2);//on2wo

echo '<br>';
echo substr_replace("onetwo",2,1,4);//o2o

echo '<br>';
echo substr_replace("elzero_web_school","a",7,3);//elzero_a_school

echo '<br>';
echo substr_replace("elzero_web_school","a",7,-1);

echo '<br>';
echo "<pre>";
print_r(substr_replace(["onetwo","threefour"],1,0));
echo "</pre>";

echo '<br>';

echo '<br>';

$str = "welcom to to elzero web school website";
echo strlen($str)."<br>";
echo wordwrap($atr , 8 , "<br>",true);//true=> cut lon words

echo '<br>';

echo ord("a");//97  

echo '<br>';

echo chr(97);//a


echo '<br>';

echo similar_text("elz@ero", "elz_eroo");

echo '<br>';

echo similar_text("elzero", "elzero",$perc);//100

echo '<br>';

echo $perc;

echo '<br>';

echo strtr("elzero web","w",true) . "<br>";//web
echo strtr("elzero web", "z",false)."<br>";//zero web
echo strlen(strtr("elzero web","w",true)). "<br>";//7


echo strtr("elzero web","w",false) . "<br>";
var_dump(strtr("elzero web","w",false));
echo '<br>';
echo '<br>';

echo 10_000_000;


echo '<br>';
echo number_format(10000000.156023,3);


echo '<br>';
echo number_format(10000000.156023,3,'@',"#");

echo '<br>';
//array functions
$frinds = ["osama","ahmed","sameh","mahmoud","gamal"];

//echo "<pre>"
print_r(array_chunk($frinds,2,true));
echo '</pre>';

$contries=["eg"=>'egypt',"ksa"=>"saudi arabia","sy"=>"syria","usa"=>"united state"];
//echo "<pre>"
print_r(array_chunk($countries,2,true));
echo '</pre>';


echo '<br>';

$counting = ["b","a","a","b","b","b","c"];
//echo "<pre>"
print_r(array_count_values($countries,2,true));
echo '</pre>';

echo '<br>';

$family = ["osama","ahmed","sameh","mahmoud","gamal",["eman","noha"]];
echo '<br>';

print_r($family);
print_r(array_reverse($family,true));

echo '<br>';
$contries=["eg"=>'egypt',"ksa"=>"saudi arabia","sy"=>"syria","usa"=>"united state"];
echo '<br>';
print_r(array_values($countries));
echo '<br>';
print_r(array_flip($countries));
echo '<br>';


echo '<br>';

$counting = ["b","a","a","b","b","b","c"];

echo '<br>';
echo count($counting,1);
echo '<br>';

$search = ["1",2,3,4];
if (in_array("1",$search,true)){
    echo "the element is found";
}

echo '<br>';
$pad = ["a","b","c","d"];
echo '<br>';
print_r(array_pad($pad,10,"@"));//after them


echo '<br>';
print_r(array_pad($pad,-10,"@"));//brfore them
echo '<br>';

$product=[10,5,2,10];

echo array_product($product)."<br>";

$sum =[10,5,2,10];

echo array_sum($sum);
echo '<br>';
$friends = ["osama","ahmed","sameh","mahmoud","gamal","eman","noha"];

echo current($friends);//osama
echo '<br>';
echo next($friends);//ahmed
echo '<br>';
echo prev($friends);//osama
echo '<br>';
echo reset($friends);//pont on first element
echo '<br>';
echo end($friends);//last element
echo '<br>';

$merge_one = ["one"=>"php",'two'=>"css","three"=>"java script"];
$merge_two = ["one"=>'html',"four"=>"python"];
echo '<br>';
print_r(array_merge($merge_one,$merge_two));


$merge_three = [10=>"php",20=>"css",30=>"java script"];
$merge_four = [40=>"python"];
echo '<br>';


echo '<br>';

$main = ["one"=>"php",'two'=>"css","three"=>"java script"];
$replace = ["one"=>'html',"four"=>"python"];
echo '<br>';
print_r(array_replace($main,$replace));
echo '<br>';
$nums = [1,2,3,4,5];
echo array_rand($nums);
echo '<br>';
print_r(shuffle($nums));
echo '<br>';
shuffle($nums);
echo '<br>';
print_r($nums);
echo '<br>';
$chars = ["a","b","c","d"];

$frist = array_shift($chars);

echo "$first";//a

echo '<br>';

print_r($chars);

echo '<br>';
$last = array_pop($chars);

echo "$last";//d

echo '<br>';

print_r($chars);


echo '<br>';

array_push($chars,"x","y","z");

echo '<br>';
array_unshift($chars,"one");//add to front
echo '<br>';

$nums = [10,20,30,40,50,60,70];

echo '<br>';
print_r(array_splice($nums,2));
print_r($nums);//[10,20]
echo '<br>';



echo '<br>';

$names =["osama","ahmed","sameh","mahmoud","gamal","eman","noha"];

sort($names);
echo '<br>';


print_r($names);
echo '<br>';

asort($names);
$codes = ["1"=>"syria","3"=>"egypt"];
ksort($codes);//by keys

krsort($codes);


echo '<br>';
echo '<br>';

//array map ...array filter

function add_title($fname){
    return "mr $fname";
}
// echo add_title("osama);
$first_name = ["osama","ahmed","sayed"];
$last_name = ["ameer",'samy',"shady"];

echo '<br>';
print_r(array_map('add_title',$first_name));
echo '<br>';

$nums = [
    1 => 3,
    6 => 1,
    3 => 2,
    4 => 8,
    5 => 4
];
function check_nums($n){
    return $n > 4;
}

echo '<br>';
print_r(array_filter($nums,"check_nums"));
echo '<br>';

function add($carry,$item){
    echo "$carry <br>";
    echo "$item <br>";
    echo $carry + $item . "<br>";
    echo "########<br>";
}
$nums = [10,20,50,100,10];
echo array_reduce($nums,"add",100);
echo '<br>';
echo '<br>';
//math fun
echo abs(10);
echo '<br>';

echo abs(0);
echo '<br>';

echo abs(-10);

echo '<br>';
echo rand(50,60);
echo '<br>';

echo mt_getrandmax();

echo '<br>';
echo intdiv(11,5);//2
echo '<br>';
echo gettype(intdiv(11,5));//integer
echo '<br>';
echo fmod(11,5);
echo '<br>';
echo gettype(fmod(11,5));
echo '<br>';
echo ceil(5.99);// 6 round up to integer
echo '<br>';
echo floor(5.99);//5 round dwon to integer
echo '<br>';
echo ceil(-5.99);//-5
echo '<br>';
echo floor(-5.99);//-6

echo '<br>';

echo round(5.99);//6
echo '<br>';
echo round(5.50);//6
echo '<br>';
echo round(5.49);//5
echo '<br>';
echo round(5.10);//5
echo '<br>';
echo round(5.99,1);//6
echo '<br>';
echo round(5.99,1);//5.9
echo '<br>';
echo round(5.99,0,PHP_ROUND_HALF_UP);//6
echo '<br>';
echo round(5.50,0,PHP_ROUND_HALF_DOWN);//5

echo '<br>';
echo round(5.50,0,PHP_ROUND_HALF_EVEN);//6

echo '<br>';
echo round(5.99,0,PHP_ROUND_HALF_ODD);//5

echo '<br>';
echo round(4.50,0,PHP_ROUND_HALF_ODD);//5

echo '<br>';
echo sqrt(16);//4..4*4
echo '<br>';
echo min(10,20,-40,-30,50);//-40....max like that
echo '<br>';
echo [10,20,-40,-30,50];//-40
echo '<br>';
print_r(min([1,3,5],[1,2,6]));

