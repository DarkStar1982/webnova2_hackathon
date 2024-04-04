# WebNOVA II Hackathon Docs

## Intro
This repository contains the SDK to allow easier interaction with Exodus Orbitals's API and UI. For more details about the API, refer to the **swagger file**.

## Hints for solving the challenge
Identify the timeframe for the mission and number of passes. After getting configuration file and docker template, add you code to the folder that will launch after all data has been acquired. Once you have processed the data, store your results in the output folder.
Step 1. Configure the mission parameters (time, place (target), number of passes)
Step 2. Get the template file pre-configured for mission operations with training data
Step 3. Add your code 
Step 4. Submit your code via SFTP script
???? (Mission execution happens here)
Step 5. Receive real output data

## Using the API
The API allows you to configure your code for the specific mission, while the actual execution happens during the time when it is most convinient for the satellite operator.


## Valid flow
TBD

### Have a look at the examples in the SDK, each example demonstrates how to use the APIs
TBD

## Usage
TBD

**These can be obtained from Exodus Orbitals.**

## Supported languages
So far, there is only support for Python, PHP, and JavaScript/TypeScript(ideally React.js). 

## For the curious - parameter description

- norad_id - https://en.wikipedia.org/wiki/Satellite_Catalog_Number
- tle1, tle2 - https://en.wikipedia.org/wiki/Two-line_element_set
- type - RGB for now, we are using a satellite camera
- nlt - Not Later Than, timestamp
- net - Not Earlier Than, timestamp
- lat - Latitude, float
- lon, lng - Longitude, float
- mission_type - **Hyperspectral(use this one)**, RGB Imager, Multispectral Imager...
- d - distance
- fov - Field Of View - https://www.sciencedirect.com/topics/earth-and-planetary-sciences/field-of-view
- pixel - Imager/camera pixels size
- sensor - sensor data, for an imager, maximum resolution
- type (instrument type) - see mission type, default value is **imager**



## TODO
In the future expect separate repos for each SDK (React, Python, PHP...)

Exodus Orbitals
https://exodusorbitals.com
