<?php



$conn = new mysqli('localhost','root','','buttons');

if ($conn->connect_error)
{
    echo "falid conn: " . $conn->connect_error;
}
else
{
echo "Done ";
}



if(isset($_POST['Forward'])){

    $my_query = "select * from dir WHERE  ID=1 ";
    $result = mysqli_query($conn, $my_query);



}else if(isset($_POST['right'])){

    $my_query = "select * from dir ID=2 ";
    $result = mysqli_query($conn, $my_query);

   

}else if(isset($_POST['left'])){

    $my_query = "select * from dir ID=3 ";
    $result = mysqli_query($conn, $my_query);



}else if(isset($_POST['Stop'])){

    $my_query = "select * from dir ID=5 ";
    $result = mysqli_query($conn, $my_query);

    
}else if(isset($_POST['Backward'])){

    $my_query = "select * from dir ID=4 ";
    $result = mysqli_query($conn, $my_query);

   
}

if($print_data[1]){
    echo $print_data[1];
}else if($print_data[2]){
    echo $print_data[2];
}else if($print_data[3]){
    echo $print_data[3];
}else if($print_data[4]){
    echo $print_data[4];
}else if($print_data[5]){
    echo $print_data[5];
}

?>
