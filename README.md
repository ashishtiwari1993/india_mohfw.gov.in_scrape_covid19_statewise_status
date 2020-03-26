# API for scraping COVID19 statewise status data from https://mohfw.gov.in

## Deploy

### Step: 1
```sh
git clone https://github.com/ashishtiwari1993/india_mohfw.gov.in_scrape_covid19_statewise_status.git
```

```sh
cd india_mohfw.gov.in_scrape_covid19_statewise_status/
```

### Step: 2
```sh
docker run -p 8080:8080 -d -v /yourpath/india_mohfw.gov.in_scrape_covid19_statewise_status/:/var/www/html trafex/alpine-nginx-php7
```

In my case it was:
```sh
docker run -p 8080:8080 -v /var/www/html/india_mohfw.gov.in_scrape_covid19_statewise_status/:/var/www/html trafex/alpine-nginx-php7
```

### Step: 3
```sh
curl localhost:8080
```

### Sample Output:
```json
{
    "andhra pradesh": [
        "1",
        "Andhra Pradesh",
        "11",
        "0",
        "1",
        "0"
    ],
    "bihar": [
        "2",
        "Bihar",
        "3",
        "0",
        "0",
        "1"
    ],
    "chhattisgarh": [
        "3",
        "Chhattisgarh",
        "3",
        "0",
        "0",
        "0"
    ],
    "delhi": [
        "4",
        "Delhi",
        "34",
        "1",
        "6",
        "1"
    ],
    "goa": [
        "5",
        "Goa",
        "3",
        "0",
        "0",
        "0"
    ],
    "gujarat": [
        "6",
        "Gujarat",
        "37",
        "1",
        "0",
        "2"
    ],
    "haryana": [
        "7",
        "Haryana",
        "16",
        "14",
        "11",
        "0"
    ],
    "himachal pradesh": [
        "8",
        "Himachal Pradesh",
        "3",
        "0",
        "0",
        "1"
    ],
    "karnataka": [
        "9",
        "Karnataka",
        "41",
        "0",
        "3",
        "1"
    ],
    "kerala": [
        "10",
        "Kerala",
        "110",
        "8",
        "4",
        "0"
    ],
    "madhya pradesh": [
        "11",
        "Madhya Pradesh",
        "15",
        "0",
        "0",
        "1"
    ],
    "maharashtra": [
        "12",
        "Maharashtra",
        "121",
        "3",
        "1",
        "3"
    ],
    "manipur": [
        "13",
        "Manipur",
        "1",
        "0",
        "0",
        "0"
    ],
    "mizoram": [
        "14",
        "Mizoram",
        "1",
        "0",
        "0",
        "0"
    ],
    "odisha": [
        "15",
        "Odisha",
        "2",
        "0",
        "0",
        "0"
    ],
    "puducherry": [
        "16",
        "Puducherry",
        "1",
        "0",
        "0",
        "0"
    ],
    "punjab": [
        "17",
        "Punjab",
        "33",
        "0",
        "0",
        "1"
    ],
    "rajasthan": [
        "18",
        "Rajasthan",
        "36",
        "2",
        "3",
        "0"
    ],
    "tamil nadu": [
        "19",
        "Tamil Nadu",
        "20",
        "6",
        "1",
        "1"
    ],
    "telengana": [
        "20",
        "Telengana",
        "31",
        "10",
        "1",
        "0"
    ],
    "chandigarh": [
        "21",
        "Chandigarh",
        "7",
        "0",
        "0",
        "0"
    ],
    "jammu and kashmir": [
        "22",
        "Jammu and Kashmir",
        "11",
        "0",
        "1",
        "0"
    ],
    "ladakh": [
        "23",
        "Ladakh",
        "13",
        "0",
        "0",
        "0"
    ],
    "uttar pradesh": [
        "24",
        "Uttar Pradesh",
        "36",
        "1",
        "11",
        "0"
    ],
    "uttarakhand": [
        "25",
        "Uttarakhand",
        "4",
        "1",
        "0",
        "0"
    ],
    "west bengal": [
        "26",
        "West Bengal",
        "9",
        "0",
        "0",
        "1"
    ]
}
```
