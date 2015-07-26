# datachallenge

Solution to the Data Challenge by Lorenzo von Ritter
July 26, 2015

Folder structure
----------------

- **Code** contains the programmed Code
  - **AmadeusDataChallenge.ipynb** iPython solution for all exercises
  - **AmadeusDataChallenge-Sandbox.ipynb** Tests for iPython. All successful approaches were implemented in *AmadeusDataChallenge.ipynb*
  - **AmadeusDataChallenge-withHDFStores.ipynb** Solution approach with HDFStores. This approach was not finished.
  - **HDFStore.ipynb** Initializes the HDFStores for the HDFStores approach.
  - **index.html** Start page for the web app. It allows to execute exercise 2 with a customized amount of top airports.
  - **topAirports.py** Is called by *index.html* and fetches the top airports for the given input value. GeoBases does not work for the web app.
  - **displayTopAirports.php** Displays the results of *topAirports.py* in a table.
- **Files** contain the data for calculations and some result data
  - **searchesExtract.csv** The first few lines of the searches file.
  - **bookingsExtract.csv** The first few lines of the bookings file.
  - **bookingsCleanExtract.csv** The first few lines of the clean bookings file. Spaces in front of the delimiter ('^') have been deleted by using *$sed 's/\s*^/^/g' bookingsExtract.csv > bookingsCleanExtract.csv*
  - **bookedSearchesExtract.csv** The first few lines of the result of exercise 4. It shows the searches with an additional column indicating whether the search led to a booking.
