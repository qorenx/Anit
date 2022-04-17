function add()
    {   
        $this->load->library('form_validation');

        $this->form_validation->set_rules('expense_type','Expense Type','required');
        $this->form_validation->set_rules('person_names','Person Names','required');
        $this->form_validation->set_rules('total_persons','Total Persons','required');
        $this->form_validation->set_rules('expense_amount','Expense Amount','required');
        $this->form_validation->set_rules('expense_details','Expense Details','required');
        $this->form_validation->set_rules('date_added','Date Added','required');

        if($this->form_validation->run())     
        {   
            $params = array(
                'expense_type' => $this->input->post('expense_type'),
                'total_persons' => $this->input->post('total_persons'),
                'person_names' => $this->input->post('person_names'),
                'expense_amount' => $this->input->post('expense_amount'),
                'expense_details' => $this->input->post('expense_details'),
                'date_added' => $this->input->post('date_added'),
                'update_date' => $this->input->post('update_date'),
            );

            print_r($params);
            exit();

            $expense_id = $this->Expense_model->add_expense($params);
            redirect('expense/index');
        }