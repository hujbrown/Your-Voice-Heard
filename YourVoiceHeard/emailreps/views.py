from django.shortcuts import render

# Create your views here.
def index(request):
    context = {}
    return render(request, 'index.html', context)

def contact_reps(request):
    context = {}
<<<<<<< HEAD
    return render(request, 'emailreps/email_rep.html', context)
=======
    return render(request, 'email_rep.html', context)

def senator_page(request):
    context = {}
    return render(request, 'SenatorPage.html', context)

def propose_vote_issues(request):
    context = {}
    return render(request, 'propose_vote_issues.html', context)

def reps_page(request):
    context = {}
    return render(request, 'RepsPage.html', context)
>>>>>>> 3e0fbdd97a75ce9a8b484d76e905e75146a2dd11
