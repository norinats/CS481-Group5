#!C:/Python27/python.exe
import pandas as pd
import sys

state = ""
if(len(sys.argv) == 2) :
    state = str(sys.argv[1])
    state = state[1:-1]

# get covid data by state from api
stateDF = pd.read_csv("https://api.covidtracking.com/v1/states/current.csv")
stateDF.drop(['totalTestEncountersViral', 'totalTestsPeopleViral',
       'totalTestsAntibody', 'positiveTestsAntibody', 'negativeTestsAntibody',
       'totalTestsPeopleAntibody', 'positiveTestsPeopleAntibody',
       'negativeTestsPeopleAntibody', 'totalTestsPeopleAntigen',
       'positiveTestsPeopleAntigen', 'totalTestsAntigen',
       'positiveTestsAntigen', 'commercialScore',
       'negativeRegularScore', 'negativeScore', 'positiveScore', 'score', 'hash', 'grade'], axis=1, inplace=True)

# print total number of positive cases
totalPositive = stateDF.loc[stateDF['state'] == state]['positive']
print("<tr><td>Total Number Cases:</td><td> {0} </td></tr>").format(totalPositive.values[0])

# print total number of deaths
totalDeaths = stateDF.loc[stateDF['state'] == state]['death']
print("<tr><td>Total Number Deaths:</td><td> {0} </td></tr>").format(totalDeaths.values[0])

# print total number of recovered cases
totalRecovered = stateDF.loc[stateDF['state'] == state]['recovered']
print("<tr><td>Total Number Recovered:</td><td> {0} </td></tr>").format(totalRecovered.values[0])