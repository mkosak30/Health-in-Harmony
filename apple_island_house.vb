Module Module1
    Sub Main()
        Dim strHealthInHarmony As String = "Health in Harmony"
        Dim strEncouragement As String = "There is a way to pursue health and harmony!"
        Dim strNewQuote As String = ""

        ' Start loop
        For i As Integer = 0 To 999
            strNewQuote = String.Format("{0}: {1}", strHealthInHarmony, strEncouragement)
            Console.WriteLine(strNewQuote)
        Next
        Console.ReadLine()
    End Sub
End Module