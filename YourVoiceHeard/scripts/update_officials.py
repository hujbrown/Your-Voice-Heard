'''
Script to add Senators and Representatives to the database
given their respective csv files generated by getreps.py
'''
from emailreps.models import Representative, Senator
import csv
import os

def run():
    # Gets the current directory path
    curr_dir = os.path.dirname(__file__)

    # Deletes all existing senators/reps before adding new ones
    reps = Representative.objects.all()
    reps.delete()
    sens = Senator.objects.all()
    sens.delete()
    
    '''
    Opens the representative.csv file in the current directory and scans each row for the
    name, comittee, website, state, party, and district.
    Creates and saves a new Representative in the DB.
    '''
    with open(os.path.join(curr_dir, './representatives.csv')) as rep_csv:
        csv_reader = csv.reader(rep_csv, delimiter=',')
        line_num = 0
        for row in csv_reader:
            if line_num == 0:
                line_num += 1
                continue
            rep = Representative(rep_name = row[0], comittee = row[3], website = row[2], state = row[1], party = row[4], district = row[5])
            rep.save()
            line_num += 1

    '''
    Opens the senators.csv file in the current directory 
    and scans each row for the name, website, state, and party
    of the Senator. Creates and saves a new Senator in the DB.
    '''
    with open(os.path.join(curr_dir, './senators.csv')) as sen_csv:
        csv_reader = csv.reader(sen_csv, delimiter=',')
        line_num = 0
        for row in csv_reader:
            if line_num == 0:
                line_num += 1
                continue
            sen = Senator(sen_name = row[0], website = row[2], state = row[1], party=row[3])
            sen.save()
            line_num += 1
    
    
    
    