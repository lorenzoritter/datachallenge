import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
import sys
#sys.path.append('/home/lorenzo/Documents/AmadeusDataChallenge/Files/geobases/')
#from GeoBases import GeoBase
#geo_o = GeoBase(data='ori_por', verbose=False)

airports = []
for chunk in pd.read_csv("/home/lorenzo/Documents/AmadeusDataChallenge/Files/bookingsClean.csv", sep="^", usecols=['arr_port','pax'], dtype={'arr_port': object, 'pax': np.float64}, chunksize=500000):
	airports.append(chunk.groupby('arr_port').pax.count())
airports = pd.concat(airports, axis=1)
columns_list = list(airports)
airports['Arrivals'] = airports.sum(axis=1)
airports.drop(columns_list,axis=1,inplace=True)
airports.sort(columns='Arrivals',inplace=True, ascending=0)

topAirports = airports.head(int(sys.argv[1])).copy()
topAirports['Name'] = np.nan
topAirports['City'] = np.nan
#for airportRowIndex, airportRow in topAirports.iterrows():
#	topAirports['Name'][airportRowIndex] = geo_o.get(airportRowIndex, 'name')
#	topAirports['City'][airportRowIndex] = geo_o.get(airportRowIndex, 'city_name_ascii')

result = topAirports.to_json(orient='index')
print result
