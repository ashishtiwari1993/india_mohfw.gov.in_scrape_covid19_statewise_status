# API for scraping COVID19 statewise status data from https://mohfw.gov.in

## Usage

### Step: 1
```sh
git clone https://github.com/ashishtiwari1993/india_mohfw.gov.in_scrape_covid19_statewise_status.git
```

```sh
cd india_mohfw.gov.in_scrape_covid19_statewise_status/
```

### Step: 2
Replace the 'yourpath' with your actual path in the below command:
```sh
docker run -p 8080:8080 -d -v /yourpath/india_mohfw.gov.in_scrape_covid19_statewise_status/:/var/www/html trafex/alpine-nginx-php7
```

In my case it was:
```sh
docker run -p 8080:8080 -d -v /var/www/html/india_mohfw.gov.in_scrape_covid19_statewise_status/:/var/www/html trafex/alpine-nginx-php7
```

### Step: 3
Hit Below command:
```sh
curl localhost:8080?q=state
```

OR simply visit `localhost:8080?q=state`

### Sample Output:
```json
[
    {
        "s_no": "1",
        "state": "Andaman and Nicobar Islands",
        "total_confirmed_case_indian_national": "1",
        "total_confirmed_cases_foreign_national": "0",
        "cured_discharge_migrated": "0",
        "death": "0"
    },
    {
        "s_no": "2",
        "state": "Andhra Pradesh",
        "total_confirmed_case_indian_national": "11",
        "total_confirmed_cases_foreign_national": "0",
        "cured_discharge_migrated": "1",
        "death": "0"
    },
    {
        "s_no": "3",
        "state": "Bihar",
        "total_confirmed_case_indian_national": "6",
        "total_confirmed_cases_foreign_national": "0",
        "cured_discharge_migrated": "0",
        "death": "1"
    },
    {
        "s_no": "4",
        "state": "Chandigarh",
        "total_confirmed_case_indian_national": "7",
        "total_confirmed_cases_foreign_national": "0",
        "cured_discharge_migrated": "0",
        "death": "0"
    },
    {
        "s_no": "5",
        "state": "Chhattisgarh",
        "total_confirmed_case_indian_national": "6",
        "total_confirmed_cases_foreign_national": "0",
        "cured_discharge_migrated": "0",
        "death": "0"
    },
    {
        "s_no": "6",
        "state": "Delhi",
        "total_confirmed_case_indian_national": "35",
        "total_confirmed_cases_foreign_national": "1",
        "cured_discharge_migrated": "6",
        "death": "1"
    },
    {
        "s_no": "7",
        "state": "Goa",
        "total_confirmed_case_indian_national": "3",
        "total_confirmed_cases_foreign_national": "0",
        "cured_discharge_migrated": "0",
        "death": "0"
    },
    {
        "s_no": "8",
        "state": "Gujarat",
        "total_confirmed_case_indian_national": "42",
        "total_confirmed_cases_foreign_national": "1",
        "cured_discharge_migrated": "0",
        "death": "3"
    },
    {
        "s_no": "9",
        "state": "Haryana",
        "total_confirmed_case_indian_national": "16",
        "total_confirmed_cases_foreign_national": "14",
        "cured_discharge_migrated": "11",
        "death": "0"
    },
    {
        "s_no": "10",
        "state": "Himachal Pradesh",
        "total_confirmed_case_indian_national": "3",
        "total_confirmed_cases_foreign_national": "0",
        "cured_discharge_migrated": "0",
        "death": "1"
    },
    {
        "s_no": "11",
        "state": "Jammu and Kashmir",
        "total_confirmed_case_indian_national": "13",
        "total_confirmed_cases_foreign_national": "0",
        "cured_discharge_migrated": "1",
        "death": "1"
    },
    {
        "s_no": "12",
        "state": "Karnataka",
        "total_confirmed_case_indian_national": "55",
        "total_confirmed_cases_foreign_national": "0",
        "cured_discharge_migrated": "3",
        "death": "2"
    },
    {
        "s_no": "13",
        "state": "Kerala",
        "total_confirmed_case_indian_national": "110",
        "total_confirmed_cases_foreign_national": "8",
        "cured_discharge_migrated": "6",
        "death": "0"
    },
    {
        "s_no": "14",
        "state": "Ladakh",
        "total_confirmed_case_indian_national": "13",
        "total_confirmed_cases_foreign_national": "0",
        "cured_discharge_migrated": "0",
        "death": "0"
    },
    {
        "s_no": "15",
        "state": "Madhya Pradesh",
        "total_confirmed_case_indian_national": "20",
        "total_confirmed_cases_foreign_national": "0",
        "cured_discharge_migrated": "0",
        "death": "1"
    },
    {
        "s_no": "16",
        "state": "Maharashtra",
        "total_confirmed_case_indian_national": "121",
        "total_confirmed_cases_foreign_national": "3",
        "cured_discharge_migrated": "1",
        "death": "3"
    },
    {
        "s_no": "17",
        "state": "Manipur",
        "total_confirmed_case_indian_national": "1",
        "total_confirmed_cases_foreign_national": "0",
        "cured_discharge_migrated": "0",
        "death": "0"
    },
    {
        "s_no": "18",
        "state": "Mizoram",
        "total_confirmed_case_indian_national": "1",
        "total_confirmed_cases_foreign_national": "0",
        "cured_discharge_migrated": "0",
        "death": "0"
    },
    {
        "s_no": "19",
        "state": "Odisha",
        "total_confirmed_case_indian_national": "2",
        "total_confirmed_cases_foreign_national": "0",
        "cured_discharge_migrated": "0",
        "death": "0"
    },
    {
        "s_no": "20",
        "state": "Puducherry",
        "total_confirmed_case_indian_national": "1",
        "total_confirmed_cases_foreign_national": "0",
        "cured_discharge_migrated": "0",
        "death": "0"
    },
    {
        "s_no": "21",
        "state": "Punjab",
        "total_confirmed_case_indian_national": "33",
        "total_confirmed_cases_foreign_national": "0",
        "cured_discharge_migrated": "0",
        "death": "1"
    },
    {
        "s_no": "22",
        "state": "Rajasthan",
        "total_confirmed_case_indian_national": "39",
        "total_confirmed_cases_foreign_national": "2",
        "cured_discharge_migrated": "3",
        "death": "0"
    },
    {
        "s_no": "23",
        "state": "Tamil Nadu",
        "total_confirmed_case_indian_national": "20",
        "total_confirmed_cases_foreign_national": "6",
        "cured_discharge_migrated": "1",
        "death": "1"
    },
    {
        "s_no": "24",
        "state": "Telengana",
        "total_confirmed_case_indian_national": "34",
        "total_confirmed_cases_foreign_national": "10",
        "cured_discharge_migrated": "1",
        "death": "0"
    },
    {
        "s_no": "25",
        "state": "Uttarakhand",
        "total_confirmed_case_indian_national": "4",
        "total_confirmed_cases_foreign_national": "1",
        "cured_discharge_migrated": "0",
        "death": "0"
    },
    {
        "s_no": "26",
        "state": "Uttar Pradesh",
        "total_confirmed_case_indian_national": "40",
        "total_confirmed_cases_foreign_national": "1",
        "cured_discharge_migrated": "11",
        "death": "0"
    },
    {
        "s_no": "27",
        "state": "West Bengal",
        "total_confirmed_case_indian_national": "10",
        "total_confirmed_cases_foreign_national": "0",
        "cured_discharge_migrated": "0",
        "death": "1"
    }
]
```

### Note:
It does scrapping in runtime when you hit the endpoint. It may take a few moments for scrape. It is just simple API wrapper on basic scrapping hence not added any authentications.
