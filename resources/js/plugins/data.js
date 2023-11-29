

function  data(){
    let data = {};

    data.states = [
        {
            "id": 1,
            "name": "臺灣",
            "slug": "臺灣",
        }
    ];
    data.cities = [
        {
            "id": 1,
            "name": "臺北市",
            "slug": "臺北市",
            "state_id": 1
        },
        {
            "id": 2,
            "name": "新北市",
            "slug": "新北市",
            "state_id": 1
        },
        {
            "id": 3,
            "name": "桃園市",
            "slug": "桃園市",
            "state_id": 1
        },
        {
            "id": 4,
            "name": "臺中市",
            "slug": "臺中市",
            "state_id": 1
        },
        {
            "id": 5,
            "name": "臺南市",
            "slug": "臺南市",
            "state_id": 1
        },
        {
            "id": 6,
            "name": "高雄市",
            "slug": "高雄市",
            "state_id": 1
        }
        
    ];
    return data;
}

module.exports = data;
