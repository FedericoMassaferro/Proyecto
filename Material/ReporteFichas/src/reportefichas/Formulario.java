/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package reportefichas;

/**
 *
 * @author localuser
 */
public class Formulario extends javax.swing.JFrame {

    /**
     * Creates new form Formulario
     */
    public Formulario() {
        initComponents();
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jScrollPane3 = new javax.swing.JScrollPane();
        jTextPane1 = new javax.swing.JTextPane();
        jTextField4 = new javax.swing.JTextField();
        jTextField5 = new javax.swing.JTextField();
        jTextField6 = new javax.swing.JTextField();
        jTextField7 = new javax.swing.JTextField();
        jTextField8 = new javax.swing.JTextField();
        jTextField9 = new javax.swing.JTextField();
        jTextField10 = new javax.swing.JTextField();
        jTextField11 = new javax.swing.JTextField();
        jLabel1 = new javax.swing.JLabel();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        getContentPane().setLayout(new org.netbeans.lib.awtextra.AbsoluteLayout());

        jScrollPane3.setViewportView(jTextPane1);

        getContentPane().add(jScrollPane3, new org.netbeans.lib.awtextra.AbsoluteConstraints(1415, 167, 65, -1));

        jTextField4.setText("1");
        getContentPane().add(jTextField4, new org.netbeans.lib.awtextra.AbsoluteConstraints(450, 280, 50, -1));

        jTextField5.setText("jTextField5");
        getContentPane().add(jTextField5, new org.netbeans.lib.awtextra.AbsoluteConstraints(450, 320, -1, -1));

        jTextField6.setText("jTextField6");
        getContentPane().add(jTextField6, new org.netbeans.lib.awtextra.AbsoluteConstraints(450, 340, -1, -1));

        jTextField7.setText("jTextField7");
        getContentPane().add(jTextField7, new org.netbeans.lib.awtextra.AbsoluteConstraints(450, 300, -1, -1));

        jTextField8.setText("jTextField8");
        getContentPane().add(jTextField8, new org.netbeans.lib.awtextra.AbsoluteConstraints(450, 260, -1, -1));

        jTextField9.setText("jTextField9");
        jTextField9.setCaretPosition(10);
        jTextField9.setMinimumSize(new java.awt.Dimension(5, 20));
        getContentPane().add(jTextField9, new org.netbeans.lib.awtextra.AbsoluteConstraints(450, 200, -1, -1));

        jTextField10.setText("jTextField10");
        getContentPane().add(jTextField10, new org.netbeans.lib.awtextra.AbsoluteConstraints(450, 240, -1, -1));

        jTextField11.setText("jTextField11");
        getContentPane().add(jTextField11, new org.netbeans.lib.awtextra.AbsoluteConstraints(450, 220, -1, -1));

        jLabel1.setIcon(new javax.swing.ImageIcon(getClass().getResource("/reportefichas/images/Diseño de Ficha de Analisis.jpg"))); // NOI18N
        jLabel1.setAlignmentY(0.0F);
        getContentPane().add(jLabel1, new org.netbeans.lib.awtextra.AbsoluteConstraints(10, 0, 960, 1040));

        pack();
    }// </editor-fold>//GEN-END:initComponents

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(Formulario.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(Formulario.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(Formulario.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(Formulario.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new Formulario().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JLabel jLabel1;
    private javax.swing.JScrollPane jScrollPane3;
    private javax.swing.JTextField jTextField10;
    private javax.swing.JTextField jTextField11;
    private javax.swing.JTextField jTextField4;
    private javax.swing.JTextField jTextField5;
    private javax.swing.JTextField jTextField6;
    private javax.swing.JTextField jTextField7;
    private javax.swing.JTextField jTextField8;
    private javax.swing.JTextField jTextField9;
    private javax.swing.JTextPane jTextPane1;
    // End of variables declaration//GEN-END:variables
}
