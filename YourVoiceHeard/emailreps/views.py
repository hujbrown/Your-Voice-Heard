from django.shortcuts import render, redirect
from django.views.decorators.http import require_POST
from .models import Senator, Representative, Issue
from .forms import IssueForm

# Create your views here.

def index(request):
    context = {}
    return render(request, 'index.html', context)

def blm(request):
    context = {}
    return render(request, 'blm.html', context)

def ice(request):
    context = {}
    return render(request, 'ice.html', context)

def yemen(request):
    context = {}
    return render(request, 'yemen.html', context)

def climatechange(request):
    context = {}
    return render(request, 'climatechange.html', context)

def proposeissues(request):
    context = {}
    return render(request, 'proposeissues.html', context)

def caofficals(request):
    context = {}
    return render(request, 'caofficals.html', context)

def elections2020(request):
    context = {}
    return render(request, '2020elections.html', context)

def reps_page(request):
    reps = Representative.objects.all()
    context = {'reps': reps}
    return render(request, 'RepsPage.html', context)

    
def make_issue(request):
    issue_form = IssueForm()
    curr_issues = reversed(Issue.objects.all())
    context = {'issue_form': issue_form, 'issues': curr_issues}
    return render(request, 'make_issue.html', context)

# Post request to add the issue to the DB
@require_POST
def add_issue(request):
    form = IssueForm(request.POST)
    if form.is_valid():
        #new_issue = Issue(issue_name = form.cleaned_data['issue_name'], issue_text = form.cleaned_data['issue_text'])
        #new_issue.save()
        new_issue = form.save()
    return redirect('emailreps:make_issue')
