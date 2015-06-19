<meta charset="utf-8">
<?php
include 'Lib/connect.php';
$sql = "select filmCategory.nameCate, actor.nameActor, country.nameCountry, film.*
        from filmCategory, actor, country, film
        where filmCategory.idCate = film.idcate and actor.idActor =  film.idActor and country.idCountry = film.idCountry";

function Dsach_phim($con, $sql) {
    if ($result = $con->query($sql)) {
        $film = array();
        $i = 0;
        while ($row_fetch_assoc = $result->fetch_assoc()) {
            $film[$i]['idFilm'] = $row_fetch_assoc["idFilm"];
            $film[$i]['nameCate'] = $row_fetch_assoc["nameCate"];
            $film[$i]['titleFilm'] = $row_fetch_assoc["titleFilm"];
            $film[$i]['desFilm'] = $row_fetch_assoc["desFilm"];
            $film[$i]['imgFilm'] = $row_fetch_assoc["imgFilm"];
            $film[$i]['linkFilm'] = $row_fetch_assoc["linkFilm"];
            $film[$i]['keyFilm'] = $row_fetch_assoc["keyFilm"];
            $film[$i]['numFilm'] = $row_fetch_assoc["numFilm"];
            $film[$i]['timeFilm'] = $row_fetch_assoc["timeFilm"];
            $film[$i]['active'] = $row_fetch_assoc["active"];
            $film[$i]['nameActor'] = $row_fetch_assoc["nameActor"];
            $film[$i]['nameCountry'] = $row_fetch_assoc["nameCountry"];
            $film[$i]['createDate'] = $row_fetch_assoc["createDate"];
            $i ++;
        }
    }
    return $film;
}

$film = Dsach_phim($con, $sql);
?>



