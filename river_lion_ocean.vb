Public Class HealthInHarmony
    ' Class structure to define the health in harmony aspect
    Private _livingHealthy As Boolean
    Private _stayingInShape As Boolean
    Private _eatingHealthy As Boolean
    Private _mentalHealth As Boolean
 
    ' Constructor
    Public Sub New()
        _livingHealthy = False
        _stayingInShape = False
        _eatingHealthy = False
        _mentalHealth = False
    End Sub
 
    ' Getters and Setters
    Public Property LivingHealthy As Boolean
        Get
            Return _livingHealthy
        End Get
        Set(value As Boolean)
            _livingHealthy = value
        End Set
    End Property
 
    Public Property StayingInShape As Boolean
        Get
            Return _stayingInShape
        End Get
        Set(value As Boolean)
            _stayingInShape = value
        End Set
    End Property
 
    Public Property EatingHealthy As Boolean
        Get
            Return _eatingHealthy
        End Get
        Set(value As Boolean)
            _eatingHealthy = value
        End Set
    End Property
 
    Public Property MentalHealth As Boolean
        Get
            Return _mentalHealth
        End Get
        Set(value As Boolean)
            _mentalHealth = value
        End Set
    End Property
 
    ' Methods
    Public Function IsHealthy() As Boolean
        If (_livingHealthy AndAlso _stayingInShape AndAlso _eatingHealthy AndAlso _mentalHealth) Then
            Return True
        Else
            Return False
        End If
    End Function
 
    Public Sub AdjustPaceOfLife()
        If (_livingHealthy) Then
            Console.WriteLine("Slow down, you don't have to do it all at once.")
        Else
            Console.WriteLine("Start living a healthier lifestyle today.")
        End If
    End Sub
 
    Public Sub Exercise()
        If (_stayingInShape) Then
            Console.WriteLine("Keep up the good work!")
        Else
            Console.WriteLine("Start exercising to stay in shape.")
        End If
    End Sub
 
    Public Sub NutritionalHabits()
        If (_eatingHealthy) Then
            Console.WriteLine("You're making the right choices!")
        Else
            Console.WriteLine("Start eating healthy to boost your health.")
        End If
    End Sub
 
    Public Sub MentalWellbeing()
        If (_mentalHealth) Then
            Console.WriteLine("Take care of your mental health.")
        Else
            Console.WriteLine("Start focusing on your mental wellbeing.")
        End If
    End Sub
End Class