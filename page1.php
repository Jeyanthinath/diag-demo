<?PHP
$data = '{
    "page": {
      "title": "Romantic Comedy",
      "total-content-items" : "54",
      "page-num-requested" : "1",
      "page-size-requested" : "20",
      "page-size-returned" : "20",
      "content-items": {
        "content": [
          {
            "name": "The Birds",
            "poster-image": "poster1.jpg"
          },
          {
            "name": "Rear Window",
            "poster-image": "poster2.jpg"
          },
          {
            "name": "Family Pot",
            "poster-image": "poster3.jpg"
          },
          {
            "name": "Family Pot",
            "poster-image": "poster2.jpg"
          },
          {
            "name": "Rear Window",
            "poster-image": "poster1.jpg"
          },
          {
            "name": "The Birds",
            "poster-image": "poster3.jpg"
          },
          {
            "name": "Rear Window",
            "poster-image": "poster3.jpg"
          },
          {
            "name": "The Birds",
            "poster-image": "poster2.jpg"
          },
          {
            "name": "Family Pot",
            "poster-image": "poster1.jpg"
          },
          {
            "name": "The Birds",
            "poster-image": "poster1.jpg"
          },
                  {
            "name": "The Birds",
            "poster-image": "poster1.jpg"
          },
          {
            "name": "Rear Window",
            "poster-image": "poster2.jpg"
          },
          {
            "name": "Family Pot",
            "poster-image": "poster3.jpg"
          },
          {
            "name": "Family Pot",
            "poster-image": "poster2.jpg"
          },
          {
            "name": "Rear Window",
            "poster-image": "poster1.jpg"
          },
          {
            "name": "The Birds",
            "poster-image": "poster3.jpg"
          },
          {
            "name": "Rear Window",
            "poster-image": "poster3.jpg"
          },
          {
            "name": "The Birds",
            "poster-image": "poster2.jpg"
          },
          {
            "name": "Family Pot",
            "poster-image": "poster1.jpg"
          },
          {
            "name": "The Birds",
            "poster-image": "poster1.jpg"
          }
        ]
      }
    }
  }';
// header('Content-Type: application/json');
$data = json_decode($data, true);
header('Content-type:application/json;charset=utf-8');
echo json_encode($data);
?>