<?php

function getGames($p) {
    $stm = $p->query('SELECT id,_WhiteName,_BlackName,_Result,_Event,_Date,_Round,_Site,_Notation from games');
    $rows = $stm->fetchAll(PDO::FETCH_ASSOC);
    $gamesList = [];

    foreach ($rows as $row) {
        $gamesList[] = $row;
    }

    echo json_encode($gamesList);
}

function getGame($p, $id) {
    $stm = $p->query("SELECT id,_WhiteName,_BlackName,_Result,_Event,_Date,_Round,_Site,_Notation from games WHERE id = ". $id);
    $rows = $stm->fetchAll(PDO::FETCH_ASSOC);

    if (count($rows) === 0) {
        http_response_code(404);
        $res = [
            "status" => false,
            "message" => 'Game not found'
        ];
        echo json_encode($res);
    } else {
        echo json_encode($rows[0]);
    }

}
